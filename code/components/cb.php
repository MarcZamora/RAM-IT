<!-- chatbot -->
<button class="open-button" onclick="openForm()">Chatbot</button>
	<div class="chat-popup" id="myForm">
		<div class="form-container">
		
        <?php
echo'
<link rel="stylesheet" href="code/css/cb.css">
<link href="code/css/cbcollapse.css" rel="stylesheet">
    <div class="wrapper">
        <div class="title">Chatbot</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there, how can I help you? Input the numbers below if your problem is fit within this catergory: 1. hardware, 2. account, 3. others </p>
                    
                    
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>'
    ?>


		<button type="button"  class="btn cancel" onclick="closeForm()">Close</button>
		</div>
	</div>

