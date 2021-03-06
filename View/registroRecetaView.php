<script type="text/javascript">

    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }
    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function() {
        $('#tags_1').tagsInput({width: 'auto'});
    });

</script>

<div class="info-section text-aperitivos">
    <div class="title-section">
        <h1>Subir receta</h1>
    </div>
</div>
<div class="wrap-upload">
    <div>
        <form action="/index.php?url=registroRecetaControler" enctype="multipart/form-data" method="post" name="formReceta">
            <div class="style-box-input-receta">
                <input type="file" name="img">
            </div>
            <div class="style-box-input-receta">
                <h3>Â¿CÃ³mo se llama tu receta</h3>
                <input type="text"  name="nombre" id="nombre" placeholder="Titulo de la receta">
            </div>
            <div class="style-box-input-receta">
                <h3>Â¿QuÃ© ingredientes contiene tu receta?</h3>
                <div class="box-form">
                    <textarea name="ingredientes" id="ingredientes"  placeholder="Escribe la lista de ingredientes" cols="45" rows="12"></textarea>
                </div>
                <div class="box-guide">
                    <h4>Ejemplo</h4>
                    <span> Ingredientes 14 personas</span>
                    <ul>
                        <li>600 gr. de carne picada de ternera</li>
                        <li>1 huevo</li>
                        <li>1 patata</li>
                        <li>1 cebolleta</li>
                        <li>6 dientes de ajo</li>
                        <li>1 cucharadita de mostaza antigua</li>
                        <li>harina</li>
                        <li>sal</li>
                        <li>pimienta</li>
                    </ul>
                </div>
            </div>
            <div class="style-box-input-receta">
                <h3>Tu receta paso a paso</h3>
                <div class="box-form">
                    <textarea name="elaboracion" id="elaboracion"  cols="45" rows="12" placeholder="Elaboracion de tu receta"></textarea>
                </div>
                <div class="box-guide">
                    <h4>Ejemplo</h4>
                    <p>Pica 2 dientes de ajo y la cebolleta finalmente y ponlos a ponchar en una sartÃ©n con un chorrito de aceite. Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.</p>
                    <p>Pica 2 dientes de ajo y la cebolleta finalmente y ponlos a ponchar en una sartÃ©n con un chorrito de aceite. Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.</p>
                    <p>Pica 2 dientes de ajo y la cebolleta finalmente y ponlos a ponchar en una sartÃ©n con un chorrito de aceite. Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.</p>
                </div>
            </div>
            <div class="style-box-input-receta">
                <h3>Â¿AlgÃºn consejo?</h3>
                <div class="box-form">
                    <textarea name="sugerencias" id="sugerencias" placeholder="Â¿ Alguna sugerencia de preparaciÃ³n ?" cols="45" rows="12"></textarea>
                </div>
                <div class="box-guide">
                    <h4>Ejemplo</h4>
                    <p>Pica 2 dientes de ajo y la cebolleta finalmente y ponlos a ponchar en una sartÃ©n con un chorrito de aceite. Pica tamien las setas y aÃ±Ã¡delas Sazona y rehoga bien.</p>

                </div>
            </div>
            <div class="style-box-input-receta align">
                <h3>Â¿De quÃ© temporada es tu receta?</h3>
                <input list="temporada" name="temporada">
                <datalist id="temporada">
                    <option value="Verano">
                    <option value="Invierno">
                    <option value="OtoÃ±o">
                    <option value="Primavera">
                </datalist>
            </div>
            <div class="style-box-input-receta align">
                <h3>Elige una secciÃ³n para tu receta</h3>
                <input list="seccion" name="seccion">
                <datalist id="seccion">
                    <option value="Aperitivos">
                    <option value="Ensaladas y verduras">
                    <option value="Arroces y cereales">
                    <option value="Sopas y crema">
                    <option value="Pastas y pizzas">
                    <option value="Legumbres">
                    <option value="Carnes">
                    <option value="Pescados y mariscos">
                    <option value="Huevos">
                    <option value="Setas y hongos">
                    <option value="Salsas">
                    <option value="Postres">
                </datalist>
            </div>
            <div class="style-box-input-receta">
                <h3>Introduce etiquetas para que encuentren tus recetas</h3>
                <input type="text" name="etiquetas" id="tags_1">
            </div>
            <div class="submit">
                <input type="submit" onclick="Ok();" value="Subir receta">
            </div>
        </form>
    </div>

</div>

<script src="/View/js/nicEdit.js" type="text/javascript"></script>
<script type="text/javascript">
                    bkLib.onDomLoaded(function() {
                        new nicEditor({buttonList: ['hr', 'bold', 'italic', 'underline', 'strikethrough', 'left', 'center', '', 'ol', 'ul', 'removeformat', 'html']}).panelInstance('ingredientes');
                        new nicEditor({buttonList: ['hr', 'bold', 'italic', 'underline', 'strikethrough', 'left', 'center', '', 'ol', 'ul', 'removeformat', 'html']}).panelInstance('elaboracion');
                        new nicEditor({buttonList: ['hr', 'bold', 'italic', 'underline', 'strikethrough', 'left', 'center', '', 'ol', 'ul', 'removeformat', 'html']}).panelInstance('sugerencias');
                    });
</script>

<script type="text/javascript">
    function Ok()
    {
        nicEditors.findEditor('ingredientes').saveContent();
        nicEditors.findEditor('elaboracion').saveContent();
        nicEditors.findEditor('sugerencias').saveContent();
        document.formReceta.submit();
    }</script>

