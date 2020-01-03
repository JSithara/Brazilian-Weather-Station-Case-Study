const express = require('express');
const router = express.Router();
const MongoClient = require('mongodb').MongoClient;
const url = "mongodb://localhost:27017/casestudy";
const option = { useNewUrlParser: true };
var output;
router.get('/:wsid',(req,res,next)=>{
    const id = parseInt(req.params.wsid);
    MongoClient.connect(url,option, function(err, db) {
        if (err) throw err;
        var dbo = db.db("casestudy");
        var query = { wsid: id };
        dbo.collection("reading").find(query).limit(10000).toArray(function(err, result) {
            if (err) throw err;
            res.status(200).json(result);
            db.close();
          });
        
      });

      
});

module.exports = router;
