@extends('layouts.exam')

@section('style')
  <link rel="stylesheet" href="https://unpkg.com/driver.js/dist/driver.min.css" />
@endsection

@section('content')
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <div class="d-flex flex-wrap gap-2 align-items-md-center">
      <span class="fw-700 text-black-50">Hai <span class="second-color">Nafis watsiq!</span></span>
      <img src="https://ui-avatars.com/api/?name=Nafis watsiq&background=random&size=30&color=fff" class="rounded-pill" alt="" />
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="col-12 answer-tab">
      <div class="border border-2 p-3 rounded-3">
        <span class="text-black-50">Jawaban:</span>
        <div class="row gap-2 p-3">
          <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num list-number-1">
            1
          </div>
          <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num list-number-2">
            2
          </div>
          <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
            3
          </div>
          <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
            4
          </div>
          <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
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
                <!-- jaawban -->
                <div class="answer-option">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-1" />
                  <label class="for-checkbox-tools" for="tool-1">
                    <div class="d-flex">
                      <div class="me-2">A.</div>
                      <span>Option 1</span>
                    </div>
                  </label>
                </div>
                <div class="answer-option">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-2" />
                  <label class="for-checkbox-tools" for="tool-2">
                    <div class="d-flex">
                      <div class="me-2">B.</div>
                      <span>Option 2</span>
                    </div>
                  </label>
                </div>
                <div class="answer-option">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-3" />
                  <label class="for-checkbox-tools" for="tool-3">
                    <div class="d-flex">
                      <div class="me-2">C.</div>
                      <span>Option 3</span>
                    </div>
                  </label>
                </div>
                <div class="answer-option">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-4" />
                  <label class="for-checkbox-tools" for="tool-4">
                    <div class="d-flex">
                      <div class="me-2">D.</div>
                      <span>Option 4</span>
                    </div>
                  </label>
                </div>
                <div class="answer-option">
                  <input class="checkbox-tools" type="radio" name="tools" id="tool-5" />
                  <label class="for-checkbox-tools" for="tool-5">
                    <div class="d-flex">
                      <div class="me-2">E.</div>
                      <span>Option 5</span>
                    </div>
                  </label>
                </div>
                <!-- end jawaban -->
              </div>
              <button type="reset" class="btn border btn-previous-exam mt-3 rounded-pill" id="reset-question">
                <i class="uil uil-redo"></i> Reset jawaban
              </button>
            </div>
          </div>
          <div class="d-flex gap-2 justify-content-center mt-5">
            <button class="btn border btn-previous-exam rounded-pill" id="prev-btn">
              <i class="uil uil-angle-left"></i> Sebelumnya
            </button>
            <button class="btn bg-second bg-second-hover white-color white-hover rounded-pill" id="next-btn">
              Selanjutnya <i class="uil uil-angle-right"></i>
            </button>
          </div>
          <div class="d-flex gap-2 justify-content-center justify-content-md-start mt-4">
            <a href="{{ url('exam') }}" class="btn border btn-previous-exam rounded-pill bg-gradient text-light px-3" id="prev-btn">
              <i class="uil uil-corner-down-left"></i> Kembali
            </a>
          </div>
        </form>
      </div>
      <div class="col-4 answer-tab ps-4 d-none d-lg-block">
        <div class="border border-2 p-3 rounded-3" id="answer-driver">
          <span class="text-black-50">Jawaban:</span>
          <div class="row gap-2 p-3">
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num list-number-1">
              1
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num list-number-2">
              2
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num list-number-3">
              3
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
              4
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center border border-1 py-1 rounded-2 answer-num">
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
<script src="{{ asset('js/timer-example.js') }}"></script>
<script src="{{ asset('js/draggable.js') }}"></script>
<script src="https://unpkg.com/driver.js/dist/driver.min.js"></script>
<script>
  const number = 1;
  $("input").on("click", function() {
    $(".list-number-"+ number).addClass("answered");
  });
  $("#reset-question").on("click", function() {
    $(".list-number-"+ number).removeClass("answered");
  });
</script>
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
<script>
  const driver = new Driver({
    allowClose: false,
  });
  // Define the steps for introduction
  const mediaQuery = window.matchMedia('(max-width: 768px)')
  if (mediaQuery.matches) {
    driver.defineSteps([{
        element: "#reset-question",
        popover: {
          className: "first-step-popover-class",
          title: "Reset Jawaban",
          description: "Body of the popover",
          position: "top",
        },
      },
      {
        element: "#draggable",
        popover: {
          title: "Timer",
          description: "Body of the popover",
          position: "bottom",
        },
      },
      {
        element: "#nav-toggler",
        popover: {
          title: "Jawabanmu",
          description: "Klik untuk melihat soal yang telah kamu jawab",
          position: "left",
        },
      },
      {
        element: "#prev-btn",
        popover: {
          title: "Kembali",
          description: "Body of the popover",
          position: "bottom",
        },
      },
      {
        element: "#next-btn",
        popover: {
          title: "Selanjutnya",
          description: "Body of the popover",
          position: "bottom",
        },
      },
      {
        element: "#theme-btn",
        popover: {
          title: "Ganti Tema",
          description: "Body of the popover",
          position: "left",
        },
      },
    ]);
  } else {
    driver.defineSteps([{
        element: "#question-driver",
        popover: {
          className: "first-step-popover-class",
          title: "Soal",
          description: "Body of the popover",
          position: "right",
        },
      },
      {
        element: "#reset-question",
        popover: {
          title: "Reset Jawaban",
          description: "Body of the popover",
          position: "top",
        },
      },
      {
        element: "#draggable",
        popover: {
          title: "Timer",
          description: "Body of the popover",
          position: "bottom",
        },
      },
      {
        element: "#answer-driver",
        popover: {
          title: "Jawabanmu",
          description: "Body of the popover",
          position: "left",
        },
      },
      {
        element: "#prev-btn",
        popover: {
          title: "Kembali",
          description: "Body of the popover",
          position: "left",
        },
      },
      {
        element: "#next-btn",
        popover: {
          title: "Selanjutnya",
          description: "Body of the popover",
          position: "right",
        },
      },
      {
        element: "#theme-btn",
        popover: {
          title: "Ganti Tema",
          description: "Body of the popover",
          position: "left",
        },
      },
    ]);
  }
  // Start the introduction
  driver.start();
</script>
@endsection