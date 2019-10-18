 //INPUT FILE
var inputs = document.querySelectorAll('.file-input')

for (var i = 0, len = inputs.length; i < len; i++) {
  customInput(inputs[i])
}

function customInput (el) {
  const fileInput = el.querySelector('.upload')
  const label = el.querySelector('.form-control')

  fileInput.onchange =
  fileInput.onmouseout = function () {
	if (!fileInput.value) return

	var value = fileInput.value.replace(/^.*[\\\/]/, '')

	label.value = value

	$(this).parent().find(".remove-file").show();

  }	
	/// Remove File
	$(".remove-file").click(function(){
		$(this).parent().find("input").val("");
		$(this).hide();
	});
}

 //FILBOX
$('.thumbnail-img img').fillBox(); 

//MOVE SECTION ACTION
if ($(window).width() < 1199.98) {
	$(".list__section__action").each(function(event){
		$(this).prependTo($(this).parent().find(".m-dropdown__content"));
	});
}
