<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <style>
    body {
      font-family: arial;
    }
    .hide {
      display: none;
    }
    p {
      font-weight: bold;
    }
  </style>
  <body>
    <div class="container">
      <h2>แบบฟอร์มจองคิวการใช้บริการล่วงหน้า</h2>
      <p>
        แบบฟอร์มการจองคิวการใช้บริการล่วงหน้าของโรงพยาบาลมหาวิทยาลัยเทคโนโลยีสุรนารี
      </p>
      <form action="/action_page.php" class="was-validated" method="POST" >
        <div class="form-group">
          <label for="uname">มีใบนัดหมาย หรือไม่</label>
          <br />
          <div class="form-check-inline">
            <label class="form-check-label">
              <input
                type="radio"
                name="appointment"
                value="มี"
                onclick="show();"
              />
              มี
              <br />

              <input
                type="radio"
                name="appointment"
                value="ไม่มี"
                onclick="block();"
              />
              ไม่มี
            </label>
          </div>
        </div>

        <div id="formShow" class="hide">
          <div class="form-group">
            <label for="pwd">หมายเลขใบนัด</label>
            <input
              type="text"
              class="form-control"
              placeholder="กรอกหมายเลขใบนัด (ถ้ามี)"
              name="appointment_id"
              required
            />
            <div class="valid-feedback"></div>
            <div class="invalid-feedback"></div>
          </div>
        </div>
        <div class="form-group">
          <label for="pwd">เลขบัตรประจำตัวประชาชน</label>
          <input
            type="text"
            tabindex="1"
            class="form-control"
            placeholder="กรอกเลขบัตรประจำตัวประชาชน"
            name="identification"
            id="card_id"
            size="25"
            value=""
            class="inputbox autowidth"
            onkeyup="autoTab(this)"
            minlength="13"
            maxlength="13"
            required
          />
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">จำเป็นต้องกรอก</div>
        </div>
        <div class="form-group form-check">
          <label class="form-check-label">
            <input
              class="form-check-input"
              type="checkbox"
              name="remember"
              required
            />
            ข้าพเจ้าได้ศึกษาและยอมรับ
            <a href="https://www.bluelightpremium.com/privacyandterms"
              >นโยบายความเป็นส่วนตัว</a
            >
            การใช้บริการ SUTH Line Connect
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">กรุณากดยอมรับ</div>
          </label>
        </div>
        <button type="submit" class="btn btn-primary" name="insert">
          จองคิวเข้าใช้บริการ
        </button>
      </form>
    </div>

    <script>
      function block() {
        document.getElementById("formShow").style.display = "none";
      }

      function show() {
        document.getElementById("formShow").style.display = "block";
      }
    </script>


  </body>
</html>
