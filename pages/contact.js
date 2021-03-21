import { Component } from "react";
//import TextareaAutosize from "react-autosize-textarea";
import axios from "axios";
//import nodemailer from "nodemailer";

// TODO : Test function send mail at the form submit click
// TODO : API route for /contact which send a mail with POST data
// TODO : Redirect to /#contact

function Contact() {
    
    /*
    state = {
        formButtonDisabled: false,
        formButtonText: "Send",
        name: "",
        mail: "",
        formContent: ""
    }
    */

    /*
    testSendMail = async () => {
        await transporter.sendMail({
            from: '"Fred Foo 👻" <foo@example.com>', // sender address
            to: "bar@example.com, baz@example.com", // list of receivers
            subject: "Hello ✔", // Subject line
            text: "Hello world?", // plain text body
            html: "<b>Hello world?</b>", // html body
        });

    };
    */

    //const emailPass = "cmntjbrztvucxrff"
    /*
    const transporter = nodemailer.createTransport({
        host: "smtp.gmail.com",
        port: 587,
        auth: {
            user: "sacha6623@gmail.com",
            pass: emailPass
        }
    })
    this.testSendMail();
    */

    return (
        <div>               
            <h2>Contact form components</h2>
            <p>Contact form introduction text</p>                    
        </div>
    )

}

export default Contact