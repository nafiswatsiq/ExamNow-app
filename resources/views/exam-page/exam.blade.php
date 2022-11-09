@extends('layouts.exam')

@section('content')    
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <div class="d-flex flex-wrap gap-2 align-items-md-center">
        <span class="fw-700 text-black-50">Hai <span class="second-color">Nafis watsiq!</span></span>
        <img src="https://ui-avatars.com/api/?name=Nafis&background=43a1ff&color=ffffff&length=1&size=30" class="rounded-pill" alt="" />
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="col-12 answer-tab">
        <div class="border border-2 p-3 rounded-3">
          <span class="text-black-50">Jawaban:</span>
          <div class="row gap-2 p-3">
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num answered">
              1
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              2
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              3
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num answered">
              4
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num answered">
              5
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              6
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              7
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              8
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              9
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              10
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="first-section">
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-8 col-12">
          <form action="">
            <div class="d-flex" id="question-driver">
              <!--  -->
              <div class="me-2">1.</div>
              <div class="col-11">
                <span>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum officiis, laborum
                  quibusdam explicabo nemo soluta exercitationem dignissimos impedit quidem quae
                  non hic officia. Minus ex praesentium repudiandae voluptates similique adipisci?
                </span>
                <div class="d-grid mt-4">
                  <div class="answer-option">
                    <input class="checkbox-tools" type="radio" name="option[]" id="option-1" />
                    <label class="for-checkbox-tools" for="option-1">
                      <div class="d-flex">
                        <div class="me-2">A.</div>
                        <span>Option A</span>
                      </div>
                    </label>
                  </div>
                  <div class="answer-option">
                    <input class="checkbox-tools" type="radio" name="option[]" id="option-2" />
                    <label class="for-checkbox-tools" for="option-2">
                      <div class="d-flex">
                        <div class="me-2">B.</div>
                        <span>Option B</span>
                      </div>
                    </label>
                  </div>
                  <div class="answer-option">
                    <input class="checkbox-tools" type="radio" name="option[]" id="option-3" />
                    <label class="for-checkbox-tools" for="option-3">
                      <div class="d-flex">
                        <div class="me-2">B.</div>
                        <span>Option C</span>
                      </div>
                    </label>
                  </div>
                  <div class="answer-option">
                    <input class="checkbox-tools" type="radio" name="option[]" id="option-4" />
                    <label class="for-checkbox-tools" for="option-4">
                      <div class="d-flex">
                        <div class="me-2">D.</div>
                        <span>Option D</span>
                      </div>
                    </label>
                  </div>
                  <div class="answer-option">
                    <input class="checkbox-tools" type="radio" name="option[]" id="option-5" />
                    <label class="for-checkbox-tools" for="option-5">
                      <div class="d-flex">
                        <div class="me-2">E.</div>
                        <span>Option E</span>
                      </div>
                    </label>
                  </div>
                  <!-- <div class="answer-option">
                    <input class="checkbox-tools" type="radio" name="tools" id="tool-2" />
                    <label class="for-checkbox-tools" for="tool-2">
                      <div class="d-flex">
                        <div class="me-2">B.</div>
                        <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum vero ex
                          hic voluptatibus laborum! Nostrum, voluptatem labore magni esse sequi
                          perferendis minima saepe ducimus a deserunt, fugiat autem magnam, culpa
                          quos dolore? Totam animi at quidem reiciendis rem a, eum consequatur
                          optio. Ipsam ex eveniet neque dolor porro at minus quo deleniti illo
                          expedita. Aliquid nam exercitationem quo animi perferendis mollitia vero
                          officia? Sed accusamus eaque repudiandae maxime laborum tempore ut, modi
                          cum voluptates recusandae illum dolorem eligendi, pariatur quas. Nulla
                          rerum facere pariatur nihil doloribus deserunt aperiam aspernatur?
                          Maxime amet in hic veritatis non quod, distinctio quas repudiandae
                          minus.</span>
                      </div>
                    </label>
                  </div> -->
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label pointer" for="flexRadioDefault1">
                      Option A
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label pointer" for="flexRadioDefault2">
                      Option B
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                    <label class="form-check-label pointer" for="flexRadioDefault3">
                      Option C
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                    <label class="form-check-label pointer" for="flexRadioDefault4">
                      Option D
                    </label>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5">
                    <label class="form-check-label pointer" for="flexRadioDefault5">
                      Option E
                    </label>
                  </div>

                </div>
                <button type="reset" class="btn border btn-previous-exam mt-3 rounded-pill" id="reset-question">
                  <i class="uil uil-redo"></i> Reset jawaban
                </button>
              </div>
            </div>
            <div class="d-flex gap-2 justify-content-center mt-5">
              <button class="btn border btn-previous-exam rounded-pill" id="prev-btn">
                <i class="uil uil-angle-left-b"></i> Sebelumnya
              </button>
              <button class="btn bg-second bg-second-hover white-color white-hover rounded-pill" id="next-btn">
                Selanjutnya <i class="uil uil-angle-right-b"></i>
              </button>
            </div>
          </form>
        </div>

        <div class="col-4 answer-tab ps-4 d-none d-lg-block">
          <div class="border border-2 p-3 rounded-3" id="answer-driver">
            <span class="text-black-50">Jawaban:</span>
            <div class="row gap-2 p-3">
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num answered active">
                1
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                2
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                3
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num answered">
                4
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num answered">
                5
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                6
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                7
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                8
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                9
              </div>
              <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
                10
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('js')
<script src="{{ asset('js/dark-theme.js') }}"></script>
<script src="{{ asset('js/timer.js') }}"></script>
<script src="{{ asset('js/draggable.js') }}"></script>

<script>
  $(function() {
    $(document.body).bind("mouseup", function(e) {
      var selection;

      if (window.getSelection) {
        selection = window.getSelection();
      } else if (document.selection) {
        selection = document.selection.createRange();
      }

      // selection.toString() !== '' && alert('"' + selection.toString() + '" was selected at ' + e.pageX + '/' + e.pageY);
      selection.toString() !== "" && alert("Hayo mau ngapain");
    });
  });
</script>
@endsection