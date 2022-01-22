<div class="wrap">
  <h1>Siellest Settings</h1>

  <section>
    <h2>Starter Content</h2>
    <p>Starter content gives you what you were promised (pages, menus etc). Usually you would want to import starter
      content only once, right after installing and activating the theme.</p>
    
    <button id="import-starter-content" class="button button-primary">Import Starter Content</button>
  </section>
</div>

<script>
  const btnImportStarterContent = document.querySelector('#import-starter-content')

  btnImportStarterContent.addEventListener('click', callImportFn)

  async function callImportFn() {
    this.innerHTML = "Importing..."
    this.disabled = true
    const resp = await fetch('<?= get_site_url() ?>/wp-json/siellest-admin/import-starter-content', {
      method: 'POST',
      headers: {
        'X-WP-Nonce': '<?= wp_create_nonce('wp_rest') ?>'
      }
    })
    
    if ((await resp.json()) == 'ok') {
      this.innerHTML = "Imported"
      this.style.backgroundColor = '#bdffbd!important'
      this.removeEventListener('click', callImportFn)
    } else {
      this.innerHTML = "Failed. Try Again"
      this.disabled = false
    }
  }
</script>
