<?php $this->displayTemplate('header') ?>

<!-- License agreement -->
<h2 id="licenses-agreement"><?php echo $this->translator->trans('License Agreements', array(), 'Install'); ?></h2>
<p><strong><?php echo $this->translator->trans('To enjoy the many features that are offered for free by PrestaShop, please read the license terms below. PrestaShop core is licensed under OSL 3.0, while the modules and themes are licensed under AFL 3.0.', array(), 'Install'); ?></strong></p>
<div style="height:200px; border:1px solid #ccc; margin-bottom:8px; padding:5px; background:#fff; overflow: auto; overflow-x:hidden; overflow-y:scroll;">
<?php $this->displayTemplate('license_content'); ?>
</div>

<div>
	<input type="checkbox" id="set_license" class="required" name="licence_agrement" value="1" style="vertical-align: middle;float:left" <?php if ($this->session->licence_agrement): ?>checked="checked"<?php endif; ?> />
	<div style="float:left;width:600px;margin-left:8px"><label for="set_license"><strong><?php echo $this->translator->trans('I agree to the above terms and conditions.', array(), 'Install'); ?></strong></label></div>
	<!--
	<br />
	<input type="checkbox" id="configuration_agrement" name="configuration_agrement" value="1" style="vertical-align: middle;float:left" <?php if ($this->session->configuration_agrement): ?>checked="checked"<?php endif; ?> />
	<div style="float:left;width:600px;margin-left:8px"><label for="configuration_agrement"><strong><?php echo $this->translator->trans('I agree to participate in improving the solution by sending anonymous information about my configuration.', array(), 'Install'); ?></strong></label></div>
	-->
</div>

<?php $this->displayTemplate('footer') ?>
