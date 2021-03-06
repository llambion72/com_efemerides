<?php
defined('_JEXEC') or die;
?>

<form action="<?php echo JRoute::_('index.php?option=com_efemerides&view=efemerides.event'); ?>" method="post" name="adminForm" id="adminForm">
  <div id="j-main-container">
    <table class="table table-striped" id="eventsList">
      <thead>
        <tr>
          <th width="1%" class="">
            <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
          </th>
          <th class="historicdate">
            <?php echo JText::_('COM_EFEMERIDES_HISTORICDATE'); ?>
          </th>
          <th class="title">
            <?php echo JText::_('COM_EFEMERIDES_TITLE'); ?>
          </th>

          <th  width="1%" class="nowrap center">
            <?php echo JText::_('JGRID_HEADING_ID') ?>
          </th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="9"><?php echo $this->pagination->getListFooter(); ?></td>
        </tr>
      </tfoot>
      <tbody>
        <?php foreach ($this->events as $i => $event) { ?>
          <tr class="row<?php echo $i % 2; ?>">
            <td class="center">
              <?php echo JHtml::_('grid.id', $i, $event->id); ?>
            </td>
            <td class="nowrap">
              <a href="<?php echo JRoute::_('index.php?option=com_efemerides&task=event.edit&view=event&layout=edit&id='.(int) $event->id); ?>">
                <?php echo $this->escape($event->historicdate); ?>
              </a>
            </td>
            <td class="nowrap">
              <a href="<?php echo JRoute::_('index.php?option=com_efemerides&task=event.edit&view=event&layout=edit&id='.(int) $event->id); ?>">
                <?php echo $this->escape($event->title); ?>
              </a>
            </td>
            <td class="center">
              <?php echo (int) $event->id; ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="view" value="events" />
    <?php echo JHtml::_('form.token'); ?>
  </div>
</form>
