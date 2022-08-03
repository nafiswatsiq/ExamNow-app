function resetOption(el) {
  const getOption = jQuery(el).closest("li").find(".input-option input");
  const getMathField = jQuery(el).closest("li").find(".input-option math-field");
  const getIcon = jQuery(el).closest("li").find("i.toogleImage");

  getOption.attr({
    type: "text",
    accept: "",
  });

  getOption.val("");
  getMathField.css("display", "none");
  getIcon.removeClass("uil-text-fields").addClass("uil-image-plus");
}

function toogleImage(el) {
  const getOption = jQuery(el).closest("li").find("input.option");
  const getIcon = jQuery(el).closest("li").find("i.toogleImage");
  const getMathField = jQuery(el).closest("li").find(".input-option math-field");

  let optionType = getOption.attr("type");
  if (optionType == "text") {
    getOption.attr({
      type: "file",
      accept: "image/png, image/jpeg",
    });
    getOption.click();
    getIcon.removeClass("uil-image-plus").addClass("uil-text-fields");
  } else if (optionType == "hidden") {
    getOption.attr({
      type: "file",
    });
    getIcon.removeClass("uil-image-plus").addClass("uil-text-fields");
  } else {
    getOption.attr({
      type: "text",
    });
    getIcon.removeClass("uil-text-fields").addClass("uil-image-plus");
  }
  getMathField.css("display", "none");
}

function mathField(el) {
  const getOption = jQuery(el).closest("li").find("input.option");
  const getMathField = jQuery(el).closest("li").find(".input-option math-field");

  getOption.attr({
    type: "hidden",
  });
  getMathField.css("display", "block");
}

function mathEdit(option) {
  const mf = document.querySelector("#mathField-" + option);
  const latexField = document.querySelector("#input-option-" + option);

  function onMathfieldInput() {
    // Output MathJSON representation of the expression
    console.clear();
    console.log("MathJSON expression", mf.expression.json);
    // Update raw LaTeX value
    latexField.value = `<math-field read-only style="display:inline-block">${mf.value}</math-field>`;
  }

  mf.addEventListener("input", onMathfieldInput);
  onMathfieldInput();
}

function saveAddMath() {
  const mf = document.querySelector("#formula");
  const latexField = document.querySelector(".summernote");
  const summernote = $(".summernote");

  function onMathfieldInput() {
    // Output MathJSON representation of the expression
    console.clear();
    console.log("MathJSON expression", mf.expression.json);
    // Update raw LaTeX value
    // latexField.value = mf.value;
    let MathString = `<math-field read-only style="display:inline-block">${mf.value}</math-field>`;
    // $('.summernote').summernote('pasteHTML', MathString);
    summernote.append(summernote.summernote("pasteHTML", MathString));
  }

  onMathfieldInput();
}