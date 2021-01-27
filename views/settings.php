<?php if (!defined('APPLICATION')) exit();
//Copyright (c) 2010-2013 by Caerostris <caerostris@gmail.com>
//	 This file is part of Van2Shout.
//
//	 Van2Shout is free software: you can redistribute it and/or modify
//	 it under the terms of the GNU General Public License as published by
//	 the Free Software Foundation, either version 3 of the License, or
//	 (at your option) any later version.
//
//	 Van2Shout is distributed in the hope that it will be useful,
//	 but WITHOUT ANY WARRANTY; without even the implied warranty of
//	 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//	 GNU General Public License for more details.
//
//	 You should have received a copy of the GNU General Public License
//	 along with Van2Shout.  If not, see <http://www.gnu.org/licenses/>.

$Session = GDN::Session();
echo $this->Form->Open();
echo $this->Form->Errors();
?>
	<section class="content">
		<h1><?php echo t('Van2Shout Settings'); ?></h1>
	<ul>
        <li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Firebase'); ?>
                <div class="info"><?php echo t("Firebase is a service which provides hyper-fast and flexible databases. The free plan should provide enough resources for all shoutboxes. Sign up at <b><a href='https://firebase.com' target='_blank'>firebase.com</a></b>"); ?></div>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->CheckBox('Plugin.Van2Shout.Firebase.Enable', 'Enable Firebase'); ?>
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Firbase URL'); ?>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.Firebase.Url'); ?>
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Firbase Secret'); ?>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.Firebase.Secret'); ?>
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Various settings'); ?>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->CheckBox('Plugin.Van2Shout.DisplayTarget.DiscussionsController', 'Show on the Discussions Page'); ?>
                <?php echo $this->Form->CheckBox('Plugin.Van2Shout.DisplayTarget.CategoriesController', 'Show on the Categories Page'); ?>
				<?php echo $this->Form->CheckBox('Plugin.Van2Shout.DisplayTarget.Page', 'Show on a seperate page'); ?>		
				<?php echo $this->Form->CheckBox('Plugin.Van2Shout.Timestamp', 'Show Timestamp'); ?>
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('"Send" Button text'); ?>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.SendText'); ?>		
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Timestamp Colour'); ?>
				<div class="info"><?php echo t('Default: Gray'); ?></div>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.TimeColour'); ?>		
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Update interval in seconds'); ?>
				<div class="info"><?php echo t('Default: 5'); ?></div>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.Interval'); ?>		
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Amount of messages to display'); ?>
				<div class="info"><?php echo t('Default: 50'); ?></div>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.MsgCount'); ?>		
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
                <?php echo $this->Form->label('Default user colour'); ?>
				<div class="info"><?php echo t('Default: theme default'); ?></div>
            </div>
            <div class="input-wrap">
                <?php echo $this->Form->Input('Plugin.Van2Shout.Default'); ?>		
            </div>
        </li>
		<li class="form-group">
            <div class="label-wrap">
				<?php echo t('Role'); ?>
			</div>
			<div class="input-wrap">
				<?php echo t('Colour'); ?> <a href="javascript:gdn.informMessage('Any HTML compatible colour (e.g. a hex colour)');">?</a>
			</div>
		</li>
		<?php
			$RoleModel = new RoleModel();
			$Roles = $RoleModel->Get();
			while($role = $Roles->Value('Name', NULL))
			{
				$inputRole = $this->Form->Input('Plugin.Van2Shout.'.$role);
				echo '<li class="form-group"><div class="label-wrap">' . $role . '</div><div class="input-wrap">' . $inputRole . '</div></li>';
			}
		?>
    </ul>
<?php echo $this->Form->close('Save'); ?>
</section>