<?php
/**
* @copyright	Copyright (C) 2009 - 2011 Ready Bytes Software Labs Pvt. Ltd. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
* @package		PayPlans
* @subpackage	Frontend
* @contact 		shyam@readybytes.in
* website		http://www.jpayplans.com
* Technical Support : Forum -	http://www.jpayplans.com/support/support-forum.html
*/

/**
 *  Grid layout for the new screen, goes here 
 */

if(defined('_JEXEC')===false) die();
?>
<!-- set view in form tag's action attribute that you have decided for your plugin -->

<form action="<?php echo XiRoute::_('index.php?option=com_payplans&view=examplemvc', false); ?>" method="post" name="adminForm" id="adminForm">
	<?php echo $this->loadTemplate('filter'); ?>
	<table class="adminlist">

		<thead>
		<!-- TABLE HEADER START -->
			<tr>
				<th class="default-grid-sno">
          			<?php echo PayplansHtml::_('grid.sort', "NUM", 'examplemvc_id', $filter_order_Dir, $filter_order);?>
        		</th>
        		<th class="default-grid-chkbox">
					<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($records); ?>);" />
				</th>
				<th><?php echo PayplansHtml::_('grid.sort', "COM_PAYPLANS_EXAMPLEMVC_GRID_TITLE", 'title', $filter_order_Dir, $filter_order);?></th>
				<th><?php echo PayplansHtml::_('grid.sort', "COM_PAYPLANS_EXAMPLEMVC_GRID_CODE", 'code', $filter_order_Dir, $filter_order);?></th>
				<th><?php echo PayplansHtml::_('grid.sort', "COM_PAYPLANS_EXAMPLEMVC_GRID_PUBLISHED", 'published', $filter_order_Dir, $filter_order);?></th>
			</tr>
		<!-- TABLE HEADER END -->
		</thead>

		<tbody>
		<!-- TABLE BODY START -->
			<?php $count= $limitstart;
			$cbCount = 0;
			foreach ($records as $record):?>
				<tr class="<?php echo "row".$count%2; ?>">
					<td> <?php echo $count+1; ?> </td>
					
					<th class="default-grid-chkbox"><?php echo PayplansHtml::_('grid.id', $cbCount++, $record->{$record_key} ); ?></th>
    				<td><?php  echo XiHtml::link($uri.'&task=edit&id='.$record->{$record_key}, $record->title); ?></td>
    				<td><?php  echo $record->code; ?></td>
				<td><?php  echo PayplansHtml::_("boolean.grid", $record, 'published', $count);?></td>
				</tr>
			<?php $count++;?>
			<?php endforeach;?>
		<!-- TABLE BODY END -->
		</tbody>

		<tfoot>
		<!-- TABLE FOOTER START -->
			<tr>
				<td colspan="11">
					<?php echo $pagination->getListFooter(); ?>
				</td>
			</tr>
		<!-- TABLE BODY END -->
		</tfoot>
	</table>

	<input type="hidden" name="filter_order" value="<?php echo $filter_order;?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $filter_order_Dir;?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>
<?php
