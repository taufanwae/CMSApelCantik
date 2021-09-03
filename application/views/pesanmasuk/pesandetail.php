
 <div class="row">
                       
  <div class="col-xs-12">  
              <div class="box">
                <div class="box-body">
                <div class="chat_window">
                  <div class="top_menu">
                      <div class="buttons">
                        <input type="hidden" id="id_pesan" value="<?php echo $record[0]['id_pesan']; ?>">
                        <input type="hidden" id="user_id" value="<?php echo $record[0]['user_id']; ?>">
                        <input type="hidden" id="id_pesan_detail_terakhir" value="<?php echo $record[count($record)-1]['id_pesan_detail']; ?>">
                      <div class="title">Chat dengan <b><?php echo $record[0]['full_name']; ?></b></div>
                  </div>
                  <ul class="messages"></ul>
                  <div class="bottom_wrapper clearfix">
                      <div class="message_input_wrapper">
                          <input class="message_input" placeholder="Ketik disini untuk balas pesan ..." />
                      </div>
                      <div class="send_message">
                          <div class="icon"></div>
                          <div class="text">Balas Pesan</div>
                      </div>
                  </div>
              </div>
              <div class="message_template">
                  <li class="message">
                      <!-- <div class="avatar"></div> -->
                      <div class="text_wrapper">
                          <div class="text"></div>
                          <div class="jam"></div>
                      </div>
                  </li>
              </div>
              </div>
              </div>
              </div>
              

              <script type="text/javascript">
                (function () {
    var Message;
    Message = function (arg) {
        this.text = arg.text, this.message_side = arg.message_side, this.jam =arg.jam;
        this.draw = function (_this) {
            return function () {
                var $message;
                $message = $($('.message_template').clone().html());
                $message.addClass(_this.message_side).find('.text').html(_this.text).find('.jam').html(_this.jam);
                $message.find('.jam').html(_this.jam);
                $('.messages').append($message);
                return setTimeout(function () {
                    return $message.addClass('appeared');
                }, 0);
            };
        }(this);
        return this;
    };
    $(function () {
        var getMessageText, message_side, sendMessage;
        message_side = 'right';


        getMessageText = function () {
            var $message_input;
            $message_input = $('.message_input');
            return $message_input.val();
        };
        sendMessage = function (text,message_side,jam) {
            var $messages, message;
            if (text.trim() === '') {
                return;
            }
            $('.message_input').val('');
            $messages = $('.messages');
            message_side; // = message_side === 'left' ? 'right' : 'left';
            message = new Message({
                text: text,
                message_side: message_side,
                jam : jam
            });
            message.draw();
            return $messages.animate({ scrollTop: $messages.prop('scrollHeight') }, 100);
        };
        $('.send_message').click(function (e) {

          var id_pesan = $("#id_pesan").val();
          var user_id = $("#user_id").val();
          var message = getMessageText();

          var dt = new Date();
          var time = dt.getHours() + ":" + dt.getMinutes();
          var month = dt.getMonth()+1;
          var tanggal = dt.getDate() +"-"+month+"-"+dt.getFullYear();


            $.ajax({
                  type: "POST",
                  url: "<?php echo site_url('pesanmasuk/balasPesan');?>",
                  data: {id_pesan : id_pesan, user_id:user_id, message:message},
                  cache: false,
                  success: function(data){
                    $("#id_pesan_detail_terakhir").val(data);
                  }
                });

            return sendMessage(getMessageText(),'right',tanggal+' jam '+time);
        });
        $('.message_input').keyup(function (e) {
            if (e.which === 13) {
                  var id_pesan = $("#id_pesan").val();
                  var user_id = $("#user_id").val();
                  var message = getMessageText();

                    var dt = new Date();
                    var time = dt.getHours() + ":" + dt.getMinutes();
                    var month = dt.getMonth()+1;
                    var tanggal = dt.getDate() +"-"+month+"-"+dt.getFullYear();

                    $.ajax({
                          type: "POST",
                          url: "<?php echo site_url('pesanmasuk/balasPesan');?>",
                          data: {id_pesan : id_pesan, user_id:user_id, message:message},
                          cache: false,
                          success: function(data){
                            $("#id_pesan_detail_terakhir").val(data);
                          }
                        });

            return sendMessage(getMessageText(),'right',tanggal+' '+time);
            }
        });

        <?php
          foreach ($record as $key) {
              $jam = date('d-m-Y',strtotime($key['date_created']))." ".date('H:i',strtotime($key['date_created']));
              if($key['pesan_Dari'] == "user")
              {
                  echo "sendMessage('".$key['message']."','left','".$jam."');";
              }else
              {
                  echo "sendMessage('".$key['message']."','right','".$jam."');";
              }
          }
        ?>


          setInterval(function(){ 
            
             var id_pesan = $("#id_pesan").val();
                  var user_id = $("#user_id").val();
                  var id_pesan_detail_terakhir = $("#id_pesan_detail_terakhir").val();

                    var dt = new Date();
                    var time = dt.getHours() + ":" + dt.getMinutes();
                    var month = dt.getMonth()+1;
                    var tanggal = dt.getDate() +"-"+month+"-"+dt.getFullYear();

                    $.ajax({
                          type: "POST",
                          url: "<?php echo site_url('pesanmasuk/ambilPesan');?>",
                          data: {id_pesan : id_pesan, user_id:user_id, id_pesan_detail_terakhir:id_pesan_detail_terakhir},
                          cache: false,
                          success: function(data){
                            var json = JSON.parse(data);
                            $.each(json, function(i, item) {
                                if(item.pesan_dari == "admin")
                                {
                                  sendMessage(item.message,'right',item.date_created);
                                }else
                                {
                                  sendMessage(item.message,'left',item.date_created);
                                }
                              $("#id_pesan_detail_terakhir").val(item.id_pesan_detail);
                            });
                          }
                        });
              
        }, 2000);
        

    });
}.call(this));
              </script>
              
</div>
