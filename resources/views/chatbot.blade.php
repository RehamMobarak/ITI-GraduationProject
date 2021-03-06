
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>
    <link rel="stylesheet" href="/css/chatbot.css">
<br><br><br>
  
<div class="chat">
  <div class="chat-title">
    <h1 class="chat-title">Careery</h1>
    <h2>Predict the Future</h2>
    <figure class="avatar">
      <img src="/images/logo.png" width="1000px" /></figure>
      
	  <div  class="r-nav"> 
     <ul>
		  <li> <a href="/home">Back</a></li>
     </ul>
     </div>
      
      
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit sound-on-click">Send</button>
  </div>

</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>
<script src="/js/chatbot.js"></script>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
@endsection
