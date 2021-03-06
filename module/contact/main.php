<div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="well well-sm">
        <form class="form-horizontal" action="" method="post">
        <fieldset>
          <legend class="text-center">お問い合わせ</legend>
          <?php 
            echo $request;
          ?>
          <!-- Name input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="name">名前</label>
            <div class="col-md-9">
              <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
            </div>
          </div>
  
          <!-- Email input-->
          <div class="form-group">
            <label class="col-md-3 control-label" for="email">メールアドレス</label>
            <div class="col-md-9">
              <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
            </div>
          </div>
  
          <!-- Message body -->
          <div class="form-group">
            <label class="col-md-3 control-label" for="message">お問い合わせ内容</label>
            <div class="col-md-9">
              <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
            </div>
          </div>
  
          <!-- Form actions -->
          <div class="form-group">
            <div class="col-md-12 text-right">
              <button type="submit" class="btn btn-primary btn-lg">送信</button>
            </div>
          </div>
        </fieldset>
        </form>
      </div>
    </div>
</div>
