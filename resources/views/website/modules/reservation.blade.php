<div class="tst-popup-bg">
    <div class="tst-popup-frame">
      <div class="tst-popup-body">
        <div class="tst-close-popup"><i class="fas fa-times"></i></div>
        <!-- title -->
        <div class="text-center">
          <div class="tst-suptitle tst-suptitle-center"></div>
          <h4 class="tst-mb-60">Table Reservation</h4>
        </div>
        <!-- title end-->
        <form>
          <div class="row">
            <div class="col-6 col-md-4">
              <input type="text" placeholder="First Name">
            </div>
            <div class="col-6 col-md-4">
              <input type="text" placeholder="Last Name">
            </div>
            <div class="col-6 col-md-4">
              <input type="text" placeholder="Phone">
            </div>
            <div class="col-6 col-md-4">
              <select class="wide">
                <option data-display="Person">Not specified</option>
                <option value="1">1 Preson</option>
                <option value="2">2 People</option>
                <option value="3">3 People</option>
                <option value="4">4 People</option>
                <option value="3">5 People</option>
                <option value="3">6 or more</option>
              </select>
            </div>
            <div class="col-6 col-md-4">
              <div class="datepicker__container">
                <input id="my-element" data-language='en' type='text' class="datepicker-here" data-position="bottom left" placeholder="Date">
              </div>
            </div>
            <div class="col-6 col-md-4">
              <select class="wide">
                <option data-display="Time">Not specified</option>
                <option value="10:00am">10:00 am</option>
                <option value="11:00am">11:00 am</option>
                <option value="12:00pm">12:00 pm</option>
                <option value="1:00pm">1:00 pm</option>
                <option value="2:00pm">2:00 pm</option>
                <option value="3:00pm">3:00 pm</option>
                <option value="4:00pm">4:00 pm</option>
                <option value="5:00pm">5:00 pm</option>
                <option value="6:00pm">6:00 pm</option>
                <option value="7:00pm">7:00 pm</option>
                <option value="8:00pm">8:00 pm</option>
                <option value="9:00pm">9:00 pm</option>
                <option value="10:00pm">10:00 pm</option>
              </select>
            </div>
            <div class="col-12">
              <textarea name="name" rows="4" placeholder="Message"></textarea>
            </div>
          </div>
          <button class="tst-btn" type="submit" name="button">Reserve a table</button>
        </form>
      </div>
    </div>
  </div>