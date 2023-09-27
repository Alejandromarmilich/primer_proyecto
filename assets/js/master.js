let listadoProvincias = document.querySelector("#listadoProvincias");
let listadoMunicipios = document.querySelector("#listadoMunicipios");

// Buscando datos en una API
fetch("https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre")
  .then((respuesta) => respuesta.json())
  .then((datosProvincias) => {
    datosProvincias.provincias.forEach((provincia) => {
      listadoProvincias.innerHTML += `<option value="${provincia.id}">${provincia.nombre}</option>`;
    });
  })
  .catch((error) => {
    console.log("Tenemos un error " + error + " !!!");
  });

listadoProvincias.addEventListener("change", function () {
  let provinciaId = this.value;

  fetch(
    `https://apis.datos.gob.ar/georef/api/municipios?provincia=${provinciaId}&campos=id,nombre`
  )
    .then((respuesta) => respuesta.json())
    .then((datosMunicipios) => {
      listadoMunicipios.innerHTML =
        '<option value="">Selecciona un municipio</option>';
      datosMunicipios.municipios.forEach((municipios) => {
        listadoMunicipios.innerHTML += `<option value="${municipios.id}">${municipios.nombre}</option>`;
      });
    })
    .catch((error) => {
      console.log("Tenemos un error " + error + " !!!");
    });
});
