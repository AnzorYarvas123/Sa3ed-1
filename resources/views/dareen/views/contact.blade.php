@extends('layout.master')
@section('content')

<section class="page-title bg-1">
    <div class="container">
       <div class="columns">
          <div class="column is-12">
             <div class="block has-text-centered">
                <span class="text-white">Contact Us</span>
                <h1 class="is-capitalize text-lg">Get in Touch</h1>
             </div>
          </div>
       </div>
    </div>
 </section>
 
 
 <section class="section">
    <div class="container">
       <div class="columns is-justify-content-center is-multiline">
          <div class="column is-6-desktop is-6-tablet">
             <div class="contact-content">
                <h2 class="mb-5">We’d love to hear from you! <br>Give us call, send us a message?</h2>
                <ul class="address-block list-unstyled">
                   <li>
                      <h6 class="mb-2">Address</h6>
                      North Main Street,Brooklyn Australia
                   </li>
                   <li>
                      <h6 class="mb-2">email us</h6>
                      contact@mail.com
                   </li>
                   <li>
                      <h6 class="mb-2">Phone Number</h6>
                      +88 01672 506 744
                   </li>
                </ul>
 
                <ul class="social-icons list-inline mt-5">
                   <li>
                      <h6 class="mb-3">Find us on social media</h6>
                   </li>
                   <li class="list-inline-item">
                      <a href="http://www.themefisher.com"><i class="icofont-facebook mr-2"></i></a>
                   </li>
                   <li class="list-inline-item">
                      <a href="http://www.themefisher.com"><i class="icofont-twitter mr-2"></i></a>
                   </li>
                   <li class="list-inline-item">
                      <a href="http://www.themefisher.com"><i class="icofont-linkedin mr-2"></i></a>
                   </li>
                </ul>
             </div>
          </div>
          <div class="column is-5-desktop is-6-tablet">
             <div class="google-map">
                <div id="map"></div>
             </div>
          </div>
       </div>
    </div>
 </section>
 
 <!-- contact form start -->
 <section class="contact-wrap section-bottom">
    <div class="container">
       <div class="columns is-multiline">
          <div class="column is-12">
             <form id="contact-form" class="contact__form" method="post" action="mail.php">
                <span class="text-color">Send a message</span>
                <h3 class="text-md mb-5">Contact Form</h3>
                <!-- form message -->
                <div class="columns is-gapless">
                   <div class="column is-12">
                      <div class="message is-primary contact__msg" style="display: none">
                         <div class="message-body">
                            Your message was sent successfully.
                         </div>
                       </div>
                   </div>
                </div>
                <!-- end message -->
                <div class="columns is-multiline">
                   <div class="column is-6-desktop is-6-tablet">
                      <label>Your Name *</label>
                      <input name="name" type="text" class="input">
                   </div>
                   <div class="column is-6-desktop is-6-tablet">
                      <label>Your Email *</label>
                      <input name="email" type="email" class="input">
                   </div>
                   <div class="column is-6-desktop is-6-tablet">
                      <label>Your Subject *</label>
                      <input name="subjecte" type="text" class="input">
                   </div>
                   <div class="column is-6-desktop is-6-tablet">
                      <label>Your Phone Number *</label>
                      <input name="phone" type="number" class="input" min="0">
                   </div>
                   <div class="column is-12">
                      <label>Your Message *</label>
                      <textarea name="message" class="input" rows="6"></textarea>
                   </div>
                   <div class="column is-12">
                      <button class="btn btn-main is-rounded" name="submit" type="submit">Send Message</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </section>
 @endsection