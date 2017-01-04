@extends('master',['countries'=>$countries])
@section('content')
 <style>
 .head{
        background: url({!!asset('resources/images/page_header/Photography-Glasses-Summer-Time.jpg')!!}) no-repeat;
        background-size: cover;
    }    
</style>


<div class="head">
    <div class="headIn">
        <h1>Contact Us</h1> 
    </div>
</div>
<div class="splash">
    <h1>WE are happy to get in touch with you</h1>
</div>
<div class="contactCon">
    
    <div class="contact">
        <div class="loginF">
            <div class="msg"></div>
            <h1>Ask us what you need to know</h1>
            
            <fieldset class="form">
                <legend>CONTACT US</legend>
                <form class="ajax" action="../controls/c_contact.php" method="post">
                    <input type="text" name="name" id="name" required="required" placeholder="Your Name" />
                    <input type="email" name="email" id="email" required="required" placeholder="Your Email" />
                    <input type="tel" name="phone" id="phone" required="required" pattern="[1-9]{11}+" placeholder="Your Mobile Number" />
                    <input type="tel" name="phone2" id="phone2" pattern="[1-9]{11}+" placeholder="Land Line Number" />                    
                    <textarea name="message" id="message" required="required" placeholder="Your Message to Us"></textarea>            
                    <input type="submit" name="submit" value="Send" /> 
                </form>
            </fieldset>
            <p>You can send us a direct message through this form, and one of our sales representatives will answer you within 24 hours.</p>
        </div>        
    </div>
</div>

<div class="map"></div>     
@stop