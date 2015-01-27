</div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mmenu({
                offCanvas: {
                    position  : "right",
                    zposition : "front"
                },
                // options
                //classes			: 'mm-white mm-slide',
                header			: {
                    add		: true,
                    update	: true,
                    title	: 'Navigation'
                }
            }, {
                // configuration
                classNames: {
                    fixedElements: {
                        fixedTop: "header",
                        fixedBottom: "footer"
                    }
                }
            });
//            $("#sidebar").mmenu().open();

            $("#footer__menu").mmenu({
                offCanvas: {
                    position  : "bottom",
                    zposition : "front"
                },
                // options
                //classes			: 'mm-white mm-slide',
                header			: {
                    add		: true,
                    update	: true,
                    title	: 'Optionen'
                }
            }, {
                // configuration
                fixedElements: {
                    fixedTop: "header",
                    fixedBottom: "footer"
                }
            });
        });
    </script>
</body>
</html>