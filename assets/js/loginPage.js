let view = false;

function toggleView() {
  if (view) {
    view = false;
    document.getElementById('regForm').style.display = 'flex';
    document.getElementById('logForm').style.display = 'none';
    document.getElementById('regP').style.display = 'flex';
    document.getElementById('logP').style.display = 'none';
  } else {
    view = true;
    document.getElementById('regForm').style.display = 'none';
    document.getElementById('logForm').style.display = 'flex';
    document.getElementById('regP').style.display = 'none';
    document.getElementById('logP').style.display = 'flex';
  }
}

const urlParams = new URLSearchParams(window.location.search);
if (urlParams.has('login')) {
  view = true;
  document.getElementById('regForm').style.display = 'none';
  document.getElementById('logForm').style.display = 'flex';
  document.getElementById('regP').style.display = 'none';
  document.getElementById('logP').style.display = 'flex';
}else{
    view = false;
    document.getElementById('regForm').style.display = 'flex';
    document.getElementById('logForm').style.display = 'none';
    document.getElementById('regP').style.display = 'flex';
    document.getElementById('logP').style.display = 'none';
}