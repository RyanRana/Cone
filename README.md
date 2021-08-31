
<h1>Cone</h1> <br>
Cone is a php application that allows users to share all their social medias, contact information, and external links by QRCode. It has a login/signup page for users to create an account, a automatic QRcode generator, and a sharable link. To run you need to import Connect.Sql as a database and run the index.php file.
<br><br>
<img width="200px" src="https://user-images.githubusercontent.com/39924576/131514882-ac890555-be42-4717-8ebe-e54a0dff0e68.png">
<br><br>
QRCODE API IS NOT MY CODE. READ THE FOLLOWING.
<br><br>
QRCode.js is javascript library for making QRCode. QRCode.js supports Cross-browser with HTML5 Canvas and table tag in DOM.
QRCode.js has no dependencies.

## Basic Usages
```
<div id="qrcode"></div>
<script type="text/javascript">
new QRCode(document.getElementById("qrcode"), "http://jindo.dev.naver.com/collie");
</script>
```

or with some options

```
<div id="qrcode"></div>
<script type="text/javascript">
var qrcode = new QRCode(document.getElementById("qrcode"), {
	text: "http://jindo.dev.naver.com/collie",
	width: 128,
	height: 128,
	colorDark : "#000000",
	colorLight : "#ffffff",
	correctLevel : QRCode.CorrectLevel.H
});
</script>
```

and you can use some methods

```
qrcode.clear(); // clear the code.
qrcode.makeCode("http://naver.com"); // make another code.
```

## Browser Compatibility
IE6~10, Chrome, Firefox, Safari, Opera, Mobile Safari, Android, Windows Mobile, ETC.

## License
MIT License

## Contact
twitter @davidshimjs

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/davidshimjs/qrcodejs/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

