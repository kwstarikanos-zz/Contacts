	<div class="footer">
		<div class="copyright">
			<b>Contacts | Designed for mobile</b>
			<br />
			<div id="credits">Script complete time: <?php
				echo $microsecond;
				?>'', Queries:
				<?php
				if (isset($_SESSION['Queries'])) {
				echo $_SESSION['Queries'];
				unset($_SESSION['Queries']); 
				} else
				echo "0";
				?>
				<div>
					<br />
					<a target="_blank" href="http://mobiledetect.net/" title="mobile detect">Device check</a> ,
					<a target="_blank" href="http://beneverard.github.io/jqPagination/" title="Pagination">Change pages</a> ,
					<a target="_blank" href="http://www.colorzilla.com/gradient-editor/" title="Flaticon">Colors</a>,<br />
					<a target="_blank" href="http://www.flaticon.com" title="Flaticon">Icons</a> ,
					<a target="_blank" href="http://cssload.net" title="css load">Css loaders</a> ,
					<a target="_blank" href="http://yuilibrary.com/" title="yui library">Menu buttons</a> ,<br />
					<a target="_blank" href="http://github.com/jdorn/sql-formatter" title="Sql formatter">Sql Format</a> ,
					<a href="index.php?admin=xxx" title="Server info">Q:1</a>
					<a href="index.php?admin" title="Server info">Q:0</a>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>