<div class="contact">
  <style>
    form{
      border: #aaa solid 1px;
      margin:20px auto;
      padding:50px;
      width: 330px
    }
    button:hover {
      background-color: red;
    }
  </style>
  <form>
    <p>
      <label for="subject">主旨:</label><input type="text" id="subject" title="主旨"/>
    <p/>
    <p>
      <label for="contact">內文:</label><textarea id="contact" name="contact"></textarea>
    </p>
    <p>
      <button type="submit">送出</button>
    </p>
  </form>
</div>
