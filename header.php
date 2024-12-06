<div class="header">
	<form method="POST" action="index.php">
		<ul class="horizontal-list">
			<li>
				<input class="page_select" type="submit" value="Main" name="mainButton"
				<?php 
				if (isset($_POST['mainButton']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Current Plan" name="currentPlanButton"
				<?php 
				if (isset($_POST['currentPlanButton']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Biomass" name="biomassButton"
				<?php  
				if (isset($_POST['biomassButton']))
				{
					echo ' disabled ';
				}
				?>/>
			</li>

			<li>
				<input class="page_select" type="submit" value="Geothermal" name="geothermalButton"
				<?php 
				if (isset($_POST['geothermalButton']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Hydroelectric" name="hydroelectricButton"
				<?php 
				if (isset($_POST['hydroelectricButton']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Solar (Home)" name="solarButton"
				<?php 
				if (isset($_POST['solarButton']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Solar (Industrial)" name="solar2Button"
				<?php 
				if (isset($_POST['solar2Button']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Wind" name="windButton"
				<?php 
				if (isset($_POST['windButton']))
				{
					echo ' disabled ';
				} 
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Our Plan" name="ourPlanButton"
				<?php 
				if (isset($_POST['ourPlanButton']))
				{
					echo ' disabled ';
				}
				?>
				/>
			</li>
			<li>
				<input class="page_select" type="submit" value="Sources" name="sourcesButton"
				<?php 
				if (isset($_POST['sourcesButton']))
				{
					echo ' disabled ';
				}
				?>
				/>
			</li>
		</ul>
	</form>
</div>