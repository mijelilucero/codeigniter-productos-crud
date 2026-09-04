<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        </div>
      </div>
      <footer class="footer px-4">
        <div class="ms-auto">
          CRUD de Clientes &copy; 2026 — Tarea de familiarización, Desarrollo Web, UMG
        </div>
      </footer>
    </div>
    <script src="<?= base_url('assets/vendors/@coreui/coreui/js/coreui.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendors/simplebar/js/simplebar.min.js') ?>"></script>
    <script>
      const header = document.querySelector("header.header");

      document.addEventListener("scroll", () => {
        if (header) {
          header.classList.toggle("shadow-sm", document.documentElement.scrollTop > 0);
        }
      });
    </script>
    <script>
      (function () {
        const html = document.documentElement;
        const boton = document.getElementById('themeToggleBtn');

        const temaGuardado = localStorage.getItem('tema') || 'light';
        html.setAttribute('data-coreui-theme', temaGuardado);

        boton.addEventListener('click', function () {
          const temaActual = html.getAttribute('data-coreui-theme');
          const nuevoTema = temaActual === 'dark' ? 'light' : 'dark';
          html.setAttribute('data-coreui-theme', nuevoTema);
          localStorage.setItem('tema', nuevoTema);
        });
      })();
    </script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>
  </body>
</html>