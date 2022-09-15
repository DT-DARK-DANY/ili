const express=require('express');
var nodemailer = require('nodemailer');
var bodyparser=require('body-parser');
const app=express();
var urlencodedparser=bodyparser.urlencoded({ extended: false });
const port=3000;
app.use(express.static('DANY'));
app.use('/CSS',express.static(__dirname+'CSS'));
app.use('/images',express.static(__dirname+'imgs'));
app.use('/js',express.static(__dirname+'JS'));
app.get('/',(req,res)=>{
    res.sendFile(__dirname+'/index.html')
});
app.get('/adminpanel',(req,res)=>{
    res.send("<script> window.location.href='http://localhost/ili/DANY/Admin_panel/index.php';</script>")
  });
app.get('/adminpanel/Dashboard',(req,res)=>{
  res.send("<script> window.location.href='http://localhost/ili/DANY/Admin_panel/Dashboard/index.php';</script>")
  
  });

    
var transporter = nodemailer.createTransport({
    service: 'gmail',
    auth: {
      user: 'illusionaire.dev@gmail.com',
      pass: 'bmzmjfqcsyxibfsx'
    }
  });
 function Subscribe(Email){
    const {createPool}= require('mysql');
    const pool=createPool({
        host:"localhost",    
        user:"root",
        password:"",
        database:"illusionaire"
    })

    pool.query(`INSERT INTO subscribe(Email) VALUES ('${Email}');`,(err,res,fields)=>{
        if(err){
            alert("data failed to sent");
            return console.log(err);
        }else{
            var mailOptions = {
                from: 'illusionaire.dev@gmail.com',
                to: `${Email}`,
                subject: 'this is a confirm Email from illusionaire',
                text: `Thanks for Subscribing with us Mr/s ${Email.split("@")[0]}, we will send all the News as soon as possible.`
              };
            transporter.sendMail(mailOptions, function(error, info){
                if (error) {
                  console.log(error);
                } else {
                  console.log('Email sent: ' + info.response);
                  
                  // alert("data has been sent");
                }
              });
            


        }});

 }
  async function sleep(timeout){
   await new Promise(r => setTimeout(r,timeout));
 }


//  async function login_Admin(Username,password) {
//     const {createPool}= require('mysql');
//     const pool=createPool({
//         host:"localhost",    
//         user:"root",
//         password:"",
//         database:"illusionaire"
//     })
//      var s=false
//      let update=0;

//      pool.query('SELECT * FROM `admin_panel` WHERE username="'+Username+'" AND password="'+password+'";', async (err,res,fields)=>{
//         if(err){
//             alert("data failed to sent");
//             return console.log(err);
//         }else{
          
//           if(res.length===1){
//             // console.log("sss")
//             s= true;
//             update=1
//             // return True;
//           }else{
//             s= false;
//             update=1
//           }
              
          
//         }});
//         while(update!=1){await sleep(500);}
//         return s;

//  }
function Contact_Us(Full_Name,Email,Message){

    const {createPool}= require('mysql');
    const pool=createPool({
        host:"localhost",    
        user:"root",
        password:"",
        database:"illusionaire"
    })
    pool.query(`INSERT INTO contact_us(full_name, Email, Message) VALUES ('${Full_Name}','${Email}','${Message}');`,(err,res,fields)=>{
        if(err){
            alert("data failed to sent");
            return console.log(err);
        }else{
            var mailOptions = {
                from: 'illusionaire.dev@gmail.com',
                to: `${Email}`,
                subject: 'this is a confirm Email from illusionaire',
                text: `Thanks for contacting us Mr/s ${Full_Name}, we will contact with you as soon as possible.`
              };
            transporter.sendMail(mailOptions, function(error, info){
                if (error) {
                  console.log(error);
                } else {
                  console.log('Email sent: ' + info.response);
                  Subscribe(Email);
                  // alert("data has been sent");
                }
              });
            


        }});

}

app.post('/Contact_Us',urlencodedparser,(req,res)=>{
    Contact_Us(req.body.Full_Name,req.body.Email,req.body.Message);
return res.redirect('/');

})
app.post('get/Contact_Us',urlencodedparser,(req,res)=>{
  

return res.redirect('/');

})
app.post('/Subscribe',urlencodedparser,(req,res)=>{
    Subscribe(req.body.EmailAddress);
return res.redirect('/');

})
// app.post('/login/admin',urlencodedparser,async (req,res)=>{
//   console.log(req.body.username)
   
//    var ret= await login_Admin(req.body.username,req.body.password)
//   console.log(ret)
//    if(ret){
//      res.redirect('/adminpanel');
//     }else{
//     res.redirect('/')
//   }
   
// })

app.listen(port,()=>console.info(`Listening on port ${port}`));