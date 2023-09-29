# LEER
# Proyectos: Citas Medicas

> **Note**<br>
    * Tareas Asignadas en Trello <br>
    * Los divs seran solo usados para aplicar clases o estilos especificos <br>
    * Sigan las reglas mostradas para una mejor organizacion, no usar **HTML no semantico**

> Ademas de esto, para que las secciones de la pagina no sean tan ambiguas, como la cabecera, el menu de navegacion, etc.

---

> **Warning**<br>
Sigan las Indicaciones para evitar malentendidos o codigo conduso


## Ejemplos

```
<header>

    <h1>Encabezado Titulo</ph1>

</header>

<main>

    <article>

        <p>texto prueba 1</p>

        <div class"img">
        <p>texto prueba 2</p>
        </div>

    </article>

 </main>
```
## Todo sera encapsulado en Section o Article
```

<main>

    <section>

        <article>

            <p>Articulo 1</p>

        </article>

        <article>

        <h1>Titulo</h1>

            <p>Articulo 2</p>

        <h2>Subtitulo</h2>

        </article>

    </section>

</main>

```
## No crear clases para cambios minimos
```
******************************************No hagas esto***************************************************

HTML:
<div class="flex">

    <img src"image.png">
    <img src-"profile">

</div>

<div class="flex2"

    <img src="ico1.svg">
    <img src="ico2.svg">

</div>


CSS:

.flex {
    display: flexbox:
    flex-direction: column;
}
.flex2 {
    display: flexbox;
    flex-direction: row;
}

*******************************************Has esto*******************************************************

HTML:

<div class="flex">

    <p>text</p>

</div>

<div class="flex" style = "flex-direction: row;">

</div>

CSS:

.flex {
    display: flexbox:
    flex-direction: column;
}

```
## agregar el nombre del formularion en php (para saber a que corresponde)
## Ejemplo de Estructuracion del Codigo:
- [Ejemplo](https://github.com/BlackFreshMint/Citas_Med/blob/main/reference.txt)
## Para entender la forma de encapsular mostrada:
* [Referencia 1](https://www.scaler.com/topics/html/semantic-tags-in-html/)
* [Referencia 2](https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.semrush.com%2Fblog%2Fsemantic-html5-guide%2F&psig=AOvVaw27QHnD2vOGurCo7u5lV2uT&ust=1695919546808000&source=images&cd=vfe&opi=89978449&ved=0CBAQjhxqFwoTCNCfnuqey4EDFQAAAAAdAAAAABAI)
* [Referencia 3](https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.w3schools.com%2Fhtml%2Fhtml5_semantic_elements.asp&psig=AOvVaw13GnyMN2gfLltEN1mc04lO&ust=1695919704458000&source=images&cd=vfe&opi=89978449&ved=0CBAQjhxqFwoTCNjPya6fy4EDFQAAAAAdAAAAABAD)

## Infomacion consultable:
* [SQL Y PHP Para DB (Video) ](https://www.youtube.com/watch?v=Y9yE98etanU)
* [CSS #1](https://www.w3schools.com/css/)
* [CSS #2]()
