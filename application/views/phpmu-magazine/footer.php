<?php
echo "<div class='wrapper'>
	<ul class='right'>";
		$topmenu2 = $this->model_utama->view_where_ordering_limit('menu',array('position' => 'Top','aktif' => 'Ya'),'urutan','ASC',0,5);
			foreach ($topmenu2->result_array() as $row) {
			echo "<li><a href='$row[link]'>$row[nama_menu]</a></li>";
		}
	echo "</ul>
	<p>&copy; ".date('Y')." Copyright <b>gatra.com</b> News. All Rights reserved.<br/>Develop by. <b style='color:orange'>GATRA</b> - Redesign by. <b style='color:orange'>Mulki Fadhiylah</b></p>
</div>";