<head>
    <title>Message: demo</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="" id="form">
        <input type="text" id="receiver" placeholder="receiver">
        <input type="text" id="sender"  placeholder="sender">
        <button>get conversation</button>
        <ul id="lMessages">

        </ul>
    </form>
    <div>
    <form action="" id="sendMessageForm">
        <div>
            <input type="text" id="chatId">
            <input type="text" id="messageSender">
        </div>
        <textarea id="messages"></textarea>
        <button>send message</button>
    </form>
    </div>
<!--
    1. get conversation -> id, messages <sender, messages, created_at,>
    2. send messages
 -->
    <script>
        $(function () {

            $('#form').submit(function (e) {
                var receiverEmail = $('#receiver').val();
                var senderEmail = $('#sender').val();
                e.preventDefault(); // default behavior
                $.get(`https://nuwang.tech/api/chat/init?members[0]=${receiverEmail}&members[1]=${senderEmail}`, function (data, status) {
                    let {id, messages} = data;
                    console.log(messages);

                    let mItem = '';

                    messages.forEach(function (item) {
                      var classItem = 'you';
                      if (item.sender != 'william') {
                        classItem = 'other';
                      }
                      mItem += `<li class='${classItem}'> ${item.messages} </li>`
                    })
                  $('#lMessages').html(mItem)
                })
            });

            $('#sendMessageForm').submit(function (e)  {
                e.preventDefault();
                $.post('https://nuwang.tech/api/chat/send-message/' + $('#chatId').val(), {messages: $('#messages').val(), sender: $('#messageSender').val()})
                  .done(function (data) {
                  console.log(data)
                })
            })
        })
    </script>
</body>
