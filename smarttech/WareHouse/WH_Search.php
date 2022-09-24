<div class="WH_Search">
  <style>
    form{
      border: #aaa solid 1px;
      margin:20px auto;
      padding:50px;
      width: 1000px
    }
    button:hover {
      background-color: red;
    }
  </style>

  <form action = "WH_Search.php" method="postcc">

    <div>
      <label for="選擇產業的英文">選擇產業:</label>
      <select id="cars" name="cars">
          <option value="0">生技</option>
          <option value="1">物聯網(IoT)</option>
          <option value="2">人工智慧物聯網(AIoT)</option>
          <option value="3">智慧製造</option>
          <option value="4">綠能</option>
      </select>
    </div>
    <br>
    <div>
      <label for="stock_number">生技公司股票代碼:</label>
      <input type="text" name="name" value="" autofocus>
    </div>
    <br>
    <div>
      <label for="stock_number">生技公司中文名稱:</label>
      <input type="text" name="name" value="" autofocus>
    </div>
    <br>
    <div>
      <label for="stock_number">合作機構名稱:</label>
      <input type="text" name="name" value="" autofocus>
    </div>
    <br>
    <div>
      <label for="合作對象類別">合作對象類別</label>
      <label><input type="checkbox" name="b[]" value="0">國外公司</label>
      <label><input type="checkbox" name="b[]" value="1">國內公司</label>
      <label><input type="checkbox" name="b[]" value="2">大學</label>
      <label><input type="checkbox" name="b[]" value="3">財團法人</label>
      <label><input type="checkbox" name="b[]" value="4">政府</label>
      <label><input type="checkbox" name="b[]" value="5">銀行</label>
      <label><input type="checkbox" name="b[]" value="6">醫院</label>
      <label><input type="checkbox" name="b[]" value="7">個人</label>
    </div>
    <br>
    <div>
      <label for="合作契約類別的英文">合作契約類別:</label>
      <select name="c[]">
        <option value="0">R & D 研發</option>
        <option value="1">非研發</option>
        <option value="2">研發與非研發都搜尋</option>
      </select>
        <label><input type="checkbox" name="c[]" value="0">合作研究</label>
        <label><input type="checkbox" name="c[]" value="1">合作開發</label>
        <label><input type="checkbox" name="c[]" value="2">委託製造</label>
        <label><input type="checkbox" name="c[]" value="3">委託研究</label>
        <label><input type="checkbox" name="c[]" value="4">委託開發</label>
        <label><input type="checkbox" name="c[]" value="5">租賃</label>
        <label><input type="checkbox" name="c[]" value="6">行銷</label>
        <label><input type="checkbox" name="c[]" value="7">財務</label>
        <label><input type="checkbox" name="c[]" value="8">補助</label>
        <label><input type="checkbox" name="c[]" value="9">建教合作</label>
        <label><input type="checkbox" name="c[]" value="10">產學合作</label>
        <label><input type="checkbox" name="c[]" value="11">策略聯盟</label>
        <label><input type="checkbox" name="c[]" value="12">採購</label>
        <label><input type="checkbox" name="c[]" value="13">授權</label>
        <label><input type="checkbox" name="c[]" value="14">移轉</label>
        <label><input type="checkbox" name="c[]" value="15">計畫</label>
        <label><input type="checkbox" name="c[]" value="16">其他</label>
    </div>
    <br>
    <div>
      <label for="合作契約起始年份的英文">合作契約起始年份:</label>
      <select name="契約起始">
          <option value="0"> >= </option>
          <option value="1"> > </option>
          <option value="2"> = </option>
          <option value="3"> < </option>
          <option value="4"> <= </option>
      </select>
      <input type="text" name="契約起始" value="" placeholder="輸入年份(西元)" autofocus>
    </div>
    <br>
    <div>
      <label for="合作契約終止年份的英文">合作契約終止年份:</label>
      <select name="契約終止">
        <option value="0"> >= </option>
        <option value="1"> > </option>
        <option value="2"> = </option>
        <option value="3"> < </option>
        <option value="4"> <= </option>
      </select>
      <input type="text" name="契約終止" value="" placeholder="輸入年份(西元)" autofocus>
    </div>
    <br>
    <div>
      <label for="合作契約類別的英文">合作契約類別:</label>
      <select id="cars" name="cars">
        <option value="不顯示">不顯示重複</option>
        <option value="顯示">顯示各年重覆的(不建議)</option>
      </select>
    </div>
    <br>
    <div>
      <label for="產生資料類型設定的英文">產生資料類型設定:</label>
      <select id="cars" name="cars">
          <option value="不顯示">不顯示保密之協定</option>
          <option value="顯示">顯示保密之協定</option>
      </select>
    </div>
    <p>
      <button type="submit">建 立 列 表</button>
    </p>
  </form>
</div>
