</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Hospital Nuestra Familia 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

{{-- <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Listo para Salir?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Seleccione "Salir" para cerrar su sesión.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="inicio">Salir</a>
            </div>
        </div>
    </div>
</div> --}}

<!-- Bootstrap core JavaScript-->
{{-- <script src="/tablero/vendor/jquery/jquery.min.js"></script> --}}
<script src="/tablero/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/tablero/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/tablero/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/tablero/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/tablero/js/demo/chart-area-demo.js"></script>

<!-- Scripts JS y Bootstrap -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!--  Referencias a los JS de datatables -->

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<!-- Estilos Responsivos para las datables -->

<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<script src="{{ asset('js/datatablecitas.js') }}"></script>
<script src="{{ asset('js/modal_datatable_crud_especialidad.js') }}"></script>
<script src="{{ asset('js/datatablepaciente.js') }}"></script>

<!-- Calendario -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"
integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- <script>
    $.datetimepicker.setLocale('es');
    $('#fecha').datetimepicker({
        inline: false,
        allowTimes: [
            '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00',
            '16:00', '16:30', '17:00', '17:30', '18:00'
        ]
    });
</script> --}}

<script>
    jQuery.datetimepicker.setLocale('de');

    jQuery('#datetimepicker1').datetimepicker({
        i18n: {
            de: {
                months: [
                    'Januar', 'Februar', 'März', 'April',
                    'Mai', 'Juni', 'Juli', 'August',
                    'September', 'Oktober', 'November', 'Dezember',
                ],
                dayOfWeek: [
                    "So.", "Mo", "Di", "Mi",
                    "Do", "Fr", "Sa.",
                ]
            }
        },
        timepicker: false,
        format: 'd.m.Y'
    });
</script>

</body>


</html>
