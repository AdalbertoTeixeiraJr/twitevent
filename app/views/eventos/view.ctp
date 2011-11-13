<head>
   	<resource:autoComplete skin="default" />
   	<meta name="layout" content="main" charset=UTF-8" />
    <script src="http://maps.google.com/maps?file=api&v=2&key=Paste the GOOGLE MAPS API key here" 
type="text/javascript"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript"> 

function load(address) {
var geocoder = new google.maps.Geocoder();

geocoder.geocode( { 'address': address}, function(results, status) {

if (status == google.maps.GeocoderStatus.OK) {
    var latitude = results[0].geometry.location.lat();
	var longitude = results[0].geometry.location.lng();
    loadAux(latitude, longitude);
	} 
});
}
function loadAux(latitude, longitude){
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("mapa")); 
		map.addControl(new GLargeMapControl()); 
        var MapTypes = map.getMapTypes(); 
         
        map.addControl(new GMapTypeControl()); 
        map.setCenter(new GLatLng(latitude, longitude), 16); 
        var marker = new GMarker(new GLatLng(latitude, longitude)); 
		map.addOverlay(marker); 
	}
} 

</script> 
</head>

<!--<div class="menu bubplastic horizontal gray">
	<ul>
		<li><span class="menu_r"><?php echo $html->link("<span class=\"menu_ar\">Perfil</b></span>", array('controller' => 'Usuarios', 'action' => 'view', $evento['Usuario']['id']), array('escape' => false)); ?></span></li>
	</ul>
	<br class="clearit" />
</div>-->

<div id="content">
	<div class="eventos view">
	<h2><?php  __('Evento');?></h2>
		<dl><?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evento['Evento']['id']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evento['Evento']['data']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Titulo'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evento['Evento']['titulo']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Preco'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evento['Evento']['preco']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Usuario'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $this->Html->link($evento['Usuario']['screen_name'], array('controller' => 'usuarios', 'action' => 'view', $evento['Usuario']['id'])); ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evento['Evento']['descricao']; ?>
				&nbsp;
			</dd>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Local'); ?></dt>
			<dd<?php if ($i++ % 2 == 0) echo $class;?>>
				<?php echo $evento['Evento']['local']; ?>
				<div id="mapa" style="width: 400px; height: 300px"></div>
				<script type="text/javascript">
					load("to:R. " + "<?php echo $evento['Evento']['local']; ?>");
				</script>
				&nbsp;
			</dd>
		</dl>
	</div>
	<div class="actions">
		<h3><?php __('Actions'); ?></h3>
		<ul>
			<li><?php echo $this->Html->link(__('Edit Evento', true), array('action' => 'edit', $evento['Evento']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Delete Evento', true), array('action' => 'delete', $evento['Evento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $evento['Evento']['id'])); ?> </li>
		</ul>
	</div>
</div>