<h3><?php _e("Extra profile information", "blank"); ?></h3>

<table class="form-table">
  <tr>
    <th><label for="subscribed"><?php _e("Subscribed to mailing list"); ?></label></th>
    <td>
      <input type="checkbox" name="subscribed" id="subscribed" value="true" <?= get_user_meta($user->ID, 'subscribed')[0] == 'true' ? 'checked' : '' ?> class="regular-text" /><br />
      <span class="description"><?php _e("Subscribe to mailing list"); ?></span>
    </td>
  </tr>
</table>