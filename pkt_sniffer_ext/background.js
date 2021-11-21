// const { response } = require("express");

(function () {
  var url_filter_obj = { urls: ["*://*/*"] };
  var post_obj = null;

  async function saveUser(data) {
    let response = await fetch(url, { method: "POST", body: data })
      .then((response) => response.json())
      .then((response) => {
        console.log(response.json());
      })
      .catch((error) => console.log(error));
  }

  function capture(req_details) {
    try {
      var data = {
        initiator: req_details.initiator,
        ip: req_details.ip,
        method: req_details.method,
        url: req_details.url,
        time: new Date(req_details.timeStamp).toLocaleString(),
      };
      console.log(data);
    } catch (e) {}
  }

  chrome.extension.onConnect.addListener(function (port) {
    try {
      console.log(port);
    } catch (e) {
      console.log();
    }

    webRequestListener(true);

    post_obj.onDisconnect.addListener(function () {
      webRequestListener(false);
    });
  });

  function webRequestListener(listen) {
    chrome.webRequest.onBeforeSendHeaders.removeListener(capture);
    chrome.webRequest.onHeadersReceived.removeListener(capture);
    chrome.webRequest.onCompleted.removeListener(capture);

    if (listen) {
      chrome.webRequest.onBeforeSendHeaders.addListener(
        capture,
        url_filter_obj,
        ["requestHeaders"]
      );
      chrome.webRequest.onHeadersReceived.addListener(capture, url_filter_obj, [
        "responseHeaders",
      ]);
      chrome.webRequest.onCompleted.addListener(capture, url_filter_obj);
    }
  }
})();
