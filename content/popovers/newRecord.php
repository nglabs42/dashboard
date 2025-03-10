<div class="popover" data-name="newRecord">
	<div class="head">
		<div class="title">New Record</div>
		<div class="icon action cancel" data-action="close"></div>
	</div>
	<div class="body">
		<form id="newRecord">
			<table id="editTable">
				<tr class="type">
					<td>Type</td>
					<td>
						<select name="type">
				    		<?php
				    			foreach ($config["recordTypes"] as $type) { ?>
				    				<option><?php echo $type; ?></option>
				    			<?php
				    			}
				    		?>
						</select>
					</td>
				</tr>
				<tr class="name">
					<td>Name</td>
					<td>
						<input type="text" name="name" required />
						<div class="placeholder"></div>
					</td>
				</tr>
				<tr class="content">
					<td>Content</td>
					<td>
						<input type="text" name="content" required />
						<div class="placeholder"></div>
					</td>
				</tr>
				<tr class="prio">
					<td>Priority</td>
					<td>
						<input type="text" name="prio" />
					</td>
				</tr>
				<tr class="ttl">
					<td>TTL</td>
					<td>
						<input type="text" name="ttl" placeholder="20" />
					</td>
				</tr>
			</table>
			<input type="hidden" name="zone">
			<input type="hidden" name="action" value="newRecord">
			<div class="submit" data-action="newRecord">Add</div>
		</form>
	</div>
</div>