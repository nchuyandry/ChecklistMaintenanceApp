function sfunction(id)
{
	var id;
	if (id != 'Tidak Ada') {
		document.getElementById('printer').removeAttribute('disabled');
		document.getElementById('model').removeAttribute('disabled');
		return false;
	} else if (id == 'Tidak Ada') {
		document.getElementById('printer').setAttribute('disabled', 'disabled');
		document.getElementById('model').setAttribute('disabled', 'disabled');
		return false;
	}
}
function bsfunction(id)
{
	var id;
	if (id != 'Tidak Ada') {
		document.getElementById('scanner').removeAttribute('disabled');
		return false;
	} else if (id == 'Tidak Ada') {
		document.getElementById('scanner').setAttribute('disabled', 'disabled');
		return false;
	}
}

function profunction()
{
	if (document.getElementById('pchkno').checked) {
		document.getElementById('txtpro').style.display = 'block';
	} else {
		document.getElementById('txtpro').style.display = 'none';
	}
}
function tfunction()
{
	if (document.getElementById('mchkno').checked) {
		document.getElementById('txtmb').style.display = 'block';
	} else {
		document.getElementById('txtmb').style.display = 'none';
	}
}
