<html lang="en">
<head>
<title>Membuat Search Engine Youtube dengan JQuery(Youtube Data API 3)</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<script src="https://use.fontawesome.com/567fc88304.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="http://fancyapps.com/fancybox/source/jquery.fancybox.css?v=2.1.5">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
#custom-search-input{
    padding: 10px;
    border: solid 10px #E4E4E4;
    border-radius: 30px;
    background-color: pink;
}

#custom-search-input input{
    border: 0;
    box-shadow: none;
    width: 93%;
}

#custom-search-input button{
    margin: 2px 0 0 0;
    background: none;
    box-shadow: none;
    border: 0;
    color: grey;
    padding: 0 4px 7 px;
    border-left: solid 1px #ccc;
}

#custom-search-input button:hover{
    border: 0;
    box-shadow: none;
    border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search{
    font-size: 23px;
}
article {
  margin: 10px 0;
  background: rgba(0,0,0,0.7);
  padding: 4px 20px;
}

.video-wrapper {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index:-1;
}

.video-wrapper video {
  position: fixed;
  top: 0;
  right: 0;
  min-width: 100%; 
  min-height: 100%;
  width: auto; 
  height: auto;
}

.content {
  position: relative;
  margin: 60px auto;
  width: 100%;
  max-width: 800px;
  z-index: 1;
}
.clearfix{
    border-bottom: 1px dotted #ccc;
    margin-bottom: 5px;
}
.channel
{
    font-weight: 700;
    color: red;
}
.block a:hover{
    color: silver;
}
.block a{
    color: #fff;
}
.block {
    position: fixed;
    background: #2184cd;
    padding: 20px;
    z-index: 1;
    top: 240px;
}
</style>
</head>
<body  style="background-color: grey;"></body>

			<hr />
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- iklan6 -->
			<ins class="adsbygoogle"
				 style="display:block"
				 data-ad-client="ca-pub-7891974726842566"
				 data-ad-slot="7611758731"
				 data-ad-format="auto"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
			<hr />
			<div class="content">
				<center><h2><i class="fa fa-youtube" aria-hidden="true"></i>Tutorial YouTube</h2></center>>
        <br><br>
				<div id="custom-search-input">
					<div class="input-group col-md-12">
						<form id="search-form" name="search-form" onsubmit="return cariYoutube();">
							<input type="text" class="form-control" placeholder="Pencarian...." id="search" />
							<span class="input-group-btn">
								<button class="btn btn-primary btn-lg" type="submit" id="findNow">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</form>
					</div>
				</div>
				<br><br>
				<div id="hasil"></div>
				<br><br>
				<div id="buttons"></div>
            
    
			</div>
<script src="script.js"></script>
</body>
</html>
<script src="script.js"></script>