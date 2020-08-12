
{if isset($savedForm)}
    <div class="alert alert-success">{$savedForm}</div>
{/if}
{if isset($errorForm)}
    <div class="alert alert-danger">{$errorForm}</div>
{/if}   
<div class="panel col-8">
    <h3><i class="icon icon-credit-card"></i> {l s='Gradi Adsense' mod='GradiAdsense'}</h3>
    <h2 id="texto">{l s='Crea tu banner prublicitario!' mod='GradiAdsense'}</h2><br />

    <form method="POST" enctype="multipart/form-data">
        <label for="title">Titulo de la publicación</label>
        <input name="title" id="title" type="text" placeholder="Titulo de la publicidad" required/><br />
        <label for="description">Descripción</label>
        <input name="description" id="description" type="text" placeholder="Descripción corta de la publicidad" 
               required /><br />
        <label for="label">Label</label>
        <input name="label" id="label" type="text" placeholder="Label del contenido" 
               required /><br />
        <label for="url">Url a apuntar</label>
        <input name="url" id="url" type="text" placeholder="Url a apuntar" required/><br />
        <label for="imagen">Imagen del banner (recomendado 1114 * 213)</label>
        <input name="imagen" id="imagen" type="file" placeholder="Imagen de publicidad" /><br />

        <input name="enviar" class="btn btn-success" type="submit"/><br />
    </form>
</div> </br>

<div class="panel col-8">
    <h3><i class="icon icon-credit-card"></i> {l s='Lista de Banners' mod='GradiAdsense'}</h3>
    <p id="entradas">
    <h2 id="texto">{l s='Lista de banners!' mod='GradiAdsense'}</h2><br />
    {if isset($statusNeg)}
        <div class="alert alert-danger">{$statusNeg}</div>
    {/if}
    {if isset($statusPos)}
        <div class="alert alert-success">{$statusPos} ¡Actualiza!</div>
    {/if}
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Label</th>
                <th scope="col">Url</th>
                <th scope="col">Switch</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$allBanners item=banner}
                <tr>
                    <td scope="row">{$banner.id_GradiAdsense}</td>
                    <td>{$banner.title}</td>
                    <td>{$banner.description}</td>
                    <td>{$banner.label}</td>
                    <td>{$banner.url}</td>

            <form method="post">
                <input style="display: none" name="id_gradi" id="id_gradi" type="text" value="{$banner.id_GradiAdsense}"/>
                <input style="display: none" name="swicth_g" id="swicth_g" type="text" value="{$banner.switch}"/>
                <td><input {if $banner.switch == 'enable'} style="color: green;"{/if} style="color: red;" type="submit" name="updateBanner" id="updateBanner" href="#" value="{$banner.switch}"/></td>
            </form> 
            <form method="post">
                <input style="display: none" name="id_gradi" id="id_gradi" type="text" value="{$banner.id_GradiAdsense}"/>
                <td><input class="btn btn-danger" type="submit" value="Borrar" name="borrarBanner" id="borrarBanner" /></td>
            </form>
            </tr>
        {/foreach}
        </tbody>
    </table>


</div>
