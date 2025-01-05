@include('header')

<div>
    <form method="post">
        @csrf
 
        <table id="ajouterunarticle">
            <tr>
                <td>
                    <label>Title de l'article</label>
                    <input required id="titre" type="text" name="titre" />
                </td>
            </tr>
            <tr>
                <td>
                    <label>Contenu de l'article</label>
                    <textarea required id="contenu" type="text" name="contenu"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="Envoyer" />
    </form>
</div>

@include('footer')