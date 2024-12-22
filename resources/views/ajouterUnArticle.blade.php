@include('header')

<div>
    <form method="post">
        @csrf
 
        <table>
            <tr>
                <td><label>Title de l'article</label></td>
                <td><input type="text" name="titre" /></td>
            </tr>
            <tr>
                <td><label>Contenu de l'article</label></td>
                <td><input type="text" name="contenu" /></td>
            </tr>
        </table>
        <input type="submit" value="Envoyer" />
    </form>
</div>

@include('footer')