const Joi = require("joi");
const express = require("express");
const app = require("express")();
const mysql = require("mysql");
const port = process.env.PORT || 5000;

// database connections
const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  database: "",
});

// connect
db.connect(() => {
  if (err) {
    console.log("Error occurred in connecting to database" + err.message);
  }
  console.log("database connected successfully");
});

// Middleware configuration
app.use(express.urlencoded({ extended: true }));
app.use(express.json());

const bodyParser = require("express").json;
app.use(bodyParser());

// routes
app.get("/", (req, res) => {
  res.send(
    "This is the RestAPI for the Packet catching and saving extension in browsers. RestAPI is developed using node.js and used mysql as the database service"
  );
});

// get data for an specific user
app.get("/:user_email", async (req, res) => {
  const query = `SELECT * from pkt_data WHERE user_email = ${req.params.user_email}`;
  db.query(query, [req.params.user_email], (error, results) => {
    if (!results[0]) {
      res.json({ status: "User Not Found!", response: res });
    } else {
      res.json(results[0]);
    }
  });
});

// add details to the database
app.post("/adddetails", (req, res) => {
  const schema = {
    email: Joi.string().required(),
    initial: Joi.string(),
    ip: Joi.string(),
    method: Joi.string(),
    url: Joi.string(),
    timestamp: Joi.string(),
  };

  const results = Joi.validate(req.body, schema);
  if (results.error) {
    res.status(400).send(results.error);
    return;
  }

  let sql = "INSERT INTO pkt_data SET ?";
  let query = db.query(sql, req.body, (err, result) => {
    if (err) {
      throw err;
    }
    console.log(result);
    res.send("Details added: " + query);
  });
});

//listening from the server_error
app.listen(port, () => {
  console.log(`Packet Sniffing API is running on port ${port}`);
});
