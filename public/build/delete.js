"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["delete"],{

/***/ "./assets/js/delete.js":
/*!*****************************!*\
  !*** ./assets/js/delete.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! sweetalert2 */ "./node_modules/sweetalert2/dist/sweetalert2.all.js");
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(sweetalert2__WEBPACK_IMPORTED_MODULE_4__);





console.log('delete.js : chargé et exécuté.');

// Vérification de l'exécution initiale
console.log('delete.js est bien exécuté.');

// Initialisation des boutons "Supprimer"
var initDeleteButtons = function initDeleteButtons() {
  console.log('Initialisation des boutons de suppression.');

  // Sélection de tous les boutons avec la classe "delete-button"
  var deleteButtons = document.querySelectorAll('.delete-button');
  console.log("Nombre de boutons d\xE9tect\xE9s : ".concat(deleteButtons.length));

  // Attachement des événements "click" à chaque bouton détecté
  deleteButtons.forEach(function (button) {
    console.log('Bouton détecté :', button);
    button.addEventListener('click', function () {
      // Récupération des attributs "data-url" et "data-token"
      var url = button.dataset.url;
      var token = button.dataset.token;
      console.log('URL :', url);
      console.log('Token CSRF :', token);

      // Affichage de la fenêtre de confirmation avec SweetAlert2
      sweetalert2__WEBPACK_IMPORTED_MODULE_4___default().fire({
        title: 'Êtes-vous sûr ?',
        text: 'Cette action est irréversible.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Oui, supprimer',
        cancelButtonText: 'Annuler'
      }).then(function (result) {
        if (result.isConfirmed) {
          console.log('Confirmation de suppression.');

          // Envoi de la requête POST au serveur
          fetch(url, {
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': token
            }
          }).then(function (response) {
            if (response.ok) {
              console.log('Requête réussie, rechargement de la page.');
              sweetalert2__WEBPACK_IMPORTED_MODULE_4___default().fire('Supprimé !', 'L\'élément a été supprimé.', 'success').then(function () {
                return location.reload();
              });
            } else {
              console.error('Erreur dans la réponse du serveur.');
              sweetalert2__WEBPACK_IMPORTED_MODULE_4___default().fire('Erreur', 'La suppression a échoué.', 'error');
            }
          })["catch"](function (error) {
            console.error('Erreur lors de la requête :', error);
            sweetalert2__WEBPACK_IMPORTED_MODULE_4___default().fire('Erreur', 'Une erreur est survenue.', 'error');
          });
        } else {
          console.log('Suppression annulée.');
        }
      });
    });
  });
};

// Attachement de l'initialisation à l'événement "DOMContentLoaded"
document.addEventListener('DOMContentLoaded', initDeleteButtons);

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_sweetalert2_dist_sweetalert2_all_js-node_modules_core-js_modules_es_arra-0950c8"], () => (__webpack_exec__("./assets/js/delete.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiZGVsZXRlLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUErQjtBQUMvQkMsT0FBTyxDQUFDQyxHQUFHLENBQUMsZ0NBQWdDLENBQUM7O0FBRzdDO0FBQ0FELE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLDZCQUE2QixDQUFDOztBQUUxQztBQUNBLElBQU1DLGlCQUFpQixHQUFHLFNBQXBCQSxpQkFBaUJBLENBQUEsRUFBUztFQUM1QkYsT0FBTyxDQUFDQyxHQUFHLENBQUMsNENBQTRDLENBQUM7O0VBRXpEO0VBQ0EsSUFBTUUsYUFBYSxHQUFHQyxRQUFRLENBQUNDLGdCQUFnQixDQUFDLGdCQUFnQixDQUFDO0VBQ2pFTCxPQUFPLENBQUNDLEdBQUcsdUNBQUFLLE1BQUEsQ0FBaUNILGFBQWEsQ0FBQ0ksTUFBTSxDQUFFLENBQUM7O0VBRW5FO0VBQ0FKLGFBQWEsQ0FBQ0ssT0FBTyxDQUFDLFVBQUNDLE1BQU0sRUFBSztJQUM5QlQsT0FBTyxDQUFDQyxHQUFHLENBQUMsa0JBQWtCLEVBQUVRLE1BQU0sQ0FBQztJQUV2Q0EsTUFBTSxDQUFDQyxnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtNQUNuQztNQUNBLElBQU1DLEdBQUcsR0FBR0YsTUFBTSxDQUFDRyxPQUFPLENBQUNELEdBQUc7TUFDOUIsSUFBTUUsS0FBSyxHQUFHSixNQUFNLENBQUNHLE9BQU8sQ0FBQ0MsS0FBSztNQUVsQ2IsT0FBTyxDQUFDQyxHQUFHLENBQUMsT0FBTyxFQUFFVSxHQUFHLENBQUM7TUFDekJYLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLGNBQWMsRUFBRVksS0FBSyxDQUFDOztNQUVsQztNQUNBZCx1REFBUyxDQUFDO1FBQ05nQixLQUFLLEVBQUUsaUJBQWlCO1FBQ3hCQyxJQUFJLEVBQUUsZ0NBQWdDO1FBQ3RDQyxJQUFJLEVBQUUsU0FBUztRQUNmQyxnQkFBZ0IsRUFBRSxJQUFJO1FBQ3RCQyxrQkFBa0IsRUFBRSxNQUFNO1FBQzFCQyxpQkFBaUIsRUFBRSxTQUFTO1FBQzVCQyxpQkFBaUIsRUFBRSxnQkFBZ0I7UUFDbkNDLGdCQUFnQixFQUFFO01BQ3RCLENBQUMsQ0FBQyxDQUFDQyxJQUFJLENBQUMsVUFBQ0MsTUFBTSxFQUFLO1FBQ2hCLElBQUlBLE1BQU0sQ0FBQ0MsV0FBVyxFQUFFO1VBQ3BCekIsT0FBTyxDQUFDQyxHQUFHLENBQUMsOEJBQThCLENBQUM7O1VBRTNDO1VBQ0F5QixLQUFLLENBQUNmLEdBQUcsRUFBRTtZQUNQZ0IsTUFBTSxFQUFFLE1BQU07WUFDZEMsT0FBTyxFQUFFO2NBQ0wsY0FBYyxFQUFFZjtZQUNwQjtVQUNKLENBQUMsQ0FBQyxDQUNHVSxJQUFJLENBQUMsVUFBQ00sUUFBUSxFQUFLO1lBQ2hCLElBQUlBLFFBQVEsQ0FBQ0MsRUFBRSxFQUFFO2NBQ2I5QixPQUFPLENBQUNDLEdBQUcsQ0FBQywyQ0FBMkMsQ0FBQztjQUN4REYsdURBQVMsQ0FBQyxZQUFZLEVBQUUsNEJBQTRCLEVBQUUsU0FBUyxDQUFDLENBQzNEd0IsSUFBSSxDQUFDO2dCQUFBLE9BQU1RLFFBQVEsQ0FBQ0MsTUFBTSxDQUFDLENBQUM7Y0FBQSxFQUFDO1lBQ3RDLENBQUMsTUFBTTtjQUNIaEMsT0FBTyxDQUFDaUMsS0FBSyxDQUFDLG9DQUFvQyxDQUFDO2NBQ25EbEMsdURBQVMsQ0FBQyxRQUFRLEVBQUUsMEJBQTBCLEVBQUUsT0FBTyxDQUFDO1lBQzVEO1VBQ0osQ0FBQyxDQUFDLFNBQ0ksQ0FBQyxVQUFDa0MsS0FBSyxFQUFLO1lBQ2RqQyxPQUFPLENBQUNpQyxLQUFLLENBQUMsNkJBQTZCLEVBQUVBLEtBQUssQ0FBQztZQUNuRGxDLHVEQUFTLENBQUMsUUFBUSxFQUFFLDBCQUEwQixFQUFFLE9BQU8sQ0FBQztVQUM1RCxDQUFDLENBQUM7UUFDVixDQUFDLE1BQU07VUFDSEMsT0FBTyxDQUFDQyxHQUFHLENBQUMsc0JBQXNCLENBQUM7UUFDdkM7TUFDSixDQUFDLENBQUM7SUFDTixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7QUFDTixDQUFDOztBQUVEO0FBQ0FHLFFBQVEsQ0FBQ00sZ0JBQWdCLENBQUMsa0JBQWtCLEVBQUVSLGlCQUFpQixDQUFDIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2RlbGV0ZS5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgU3dhbCBmcm9tICdzd2VldGFsZXJ0Mic7XHJcbmNvbnNvbGUubG9nKCdkZWxldGUuanMgOiBjaGFyZ8OpIGV0IGV4w6ljdXTDqS4nKTtcclxuXHJcblxyXG4vLyBWw6lyaWZpY2F0aW9uIGRlIGwnZXjDqWN1dGlvbiBpbml0aWFsZVxyXG5jb25zb2xlLmxvZygnZGVsZXRlLmpzIGVzdCBiaWVuIGV4w6ljdXTDqS4nKTtcclxuXHJcbi8vIEluaXRpYWxpc2F0aW9uIGRlcyBib3V0b25zIFwiU3VwcHJpbWVyXCJcclxuY29uc3QgaW5pdERlbGV0ZUJ1dHRvbnMgPSAoKSA9PiB7XHJcbiAgICBjb25zb2xlLmxvZygnSW5pdGlhbGlzYXRpb24gZGVzIGJvdXRvbnMgZGUgc3VwcHJlc3Npb24uJyk7XHJcblxyXG4gICAgLy8gU8OpbGVjdGlvbiBkZSB0b3VzIGxlcyBib3V0b25zIGF2ZWMgbGEgY2xhc3NlIFwiZGVsZXRlLWJ1dHRvblwiXHJcbiAgICBjb25zdCBkZWxldGVCdXR0b25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmRlbGV0ZS1idXR0b24nKTtcclxuICAgIGNvbnNvbGUubG9nKGBOb21icmUgZGUgYm91dG9ucyBkw6l0ZWN0w6lzIDogJHtkZWxldGVCdXR0b25zLmxlbmd0aH1gKTtcclxuXHJcbiAgICAvLyBBdHRhY2hlbWVudCBkZXMgw6l2w6luZW1lbnRzIFwiY2xpY2tcIiDDoCBjaGFxdWUgYm91dG9uIGTDqXRlY3TDqVxyXG4gICAgZGVsZXRlQnV0dG9ucy5mb3JFYWNoKChidXR0b24pID0+IHtcclxuICAgICAgICBjb25zb2xlLmxvZygnQm91dG9uIGTDqXRlY3TDqSA6JywgYnV0dG9uKTtcclxuXHJcbiAgICAgICAgYnV0dG9uLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xyXG4gICAgICAgICAgICAvLyBSw6ljdXDDqXJhdGlvbiBkZXMgYXR0cmlidXRzIFwiZGF0YS11cmxcIiBldCBcImRhdGEtdG9rZW5cIlxyXG4gICAgICAgICAgICBjb25zdCB1cmwgPSBidXR0b24uZGF0YXNldC51cmw7XHJcbiAgICAgICAgICAgIGNvbnN0IHRva2VuID0gYnV0dG9uLmRhdGFzZXQudG9rZW47XHJcblxyXG4gICAgICAgICAgICBjb25zb2xlLmxvZygnVVJMIDonLCB1cmwpO1xyXG4gICAgICAgICAgICBjb25zb2xlLmxvZygnVG9rZW4gQ1NSRiA6JywgdG9rZW4pO1xyXG5cclxuICAgICAgICAgICAgLy8gQWZmaWNoYWdlIGRlIGxhIGZlbsOqdHJlIGRlIGNvbmZpcm1hdGlvbiBhdmVjIFN3ZWV0QWxlcnQyXHJcbiAgICAgICAgICAgIFN3YWwuZmlyZSh7XHJcbiAgICAgICAgICAgICAgICB0aXRsZTogJ8OKdGVzLXZvdXMgc8O7ciA/JyxcclxuICAgICAgICAgICAgICAgIHRleHQ6ICdDZXR0ZSBhY3Rpb24gZXN0IGlycsOpdmVyc2libGUuJyxcclxuICAgICAgICAgICAgICAgIGljb246ICd3YXJuaW5nJyxcclxuICAgICAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXHJcbiAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uQ29sb3I6ICcjZDMzJyxcclxuICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvbkNvbG9yOiAnIzMwODVkNicsXHJcbiAgICAgICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogJ091aSwgc3VwcHJpbWVyJyxcclxuICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvblRleHQ6ICdBbm51bGVyJyxcclxuICAgICAgICAgICAgfSkudGhlbigocmVzdWx0KSA9PiB7XHJcbiAgICAgICAgICAgICAgICBpZiAocmVzdWx0LmlzQ29uZmlybWVkKSB7XHJcbiAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ0NvbmZpcm1hdGlvbiBkZSBzdXBwcmVzc2lvbi4nKTtcclxuXHJcbiAgICAgICAgICAgICAgICAgICAgLy8gRW52b2kgZGUgbGEgcmVxdcOqdGUgUE9TVCBhdSBzZXJ2ZXVyXHJcbiAgICAgICAgICAgICAgICAgICAgZmV0Y2godXJsLCB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIG1ldGhvZDogJ1BPU1QnLFxyXG4gICAgICAgICAgICAgICAgICAgICAgICBoZWFkZXJzOiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAnWC1DU1JGLVRPS0VOJzogdG9rZW4sXHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0sXHJcbiAgICAgICAgICAgICAgICAgICAgfSlcclxuICAgICAgICAgICAgICAgICAgICAgICAgLnRoZW4oKHJlc3BvbnNlKSA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBpZiAocmVzcG9uc2Uub2spIHtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygnUmVxdcOqdGUgcsOpdXNzaWUsIHJlY2hhcmdlbWVudCBkZSBsYSBwYWdlLicpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZSgnU3VwcHJpbcOpICEnLCAnTFxcJ8OpbMOpbWVudCBhIMOpdMOpIHN1cHByaW3DqS4nLCAnc3VjY2VzcycpXHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC50aGVuKCgpID0+IGxvY2F0aW9uLnJlbG9hZCgpKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgY29uc29sZS5lcnJvcignRXJyZXVyIGRhbnMgbGEgcsOpcG9uc2UgZHUgc2VydmV1ci4nKTtcclxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBTd2FsLmZpcmUoJ0VycmV1cicsICdMYSBzdXBwcmVzc2lvbiBhIMOpY2hvdcOpLicsICdlcnJvcicpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICAgICAgICAgICAgICB9KVxyXG4gICAgICAgICAgICAgICAgICAgICAgICAuY2F0Y2goKGVycm9yKSA9PiB7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmVycm9yKCdFcnJldXIgbG9ycyBkZSBsYSByZXF1w6p0ZSA6JywgZXJyb3IpO1xyXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKCdFcnJldXInLCAnVW5lIGVycmV1ciBlc3Qgc3VydmVudWUuJywgJ2Vycm9yJyk7XHJcbiAgICAgICAgICAgICAgICAgICAgICAgIH0pO1xyXG4gICAgICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygnU3VwcHJlc3Npb24gYW5udWzDqWUuJyk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfSk7XHJcbn07XHJcblxyXG4vLyBBdHRhY2hlbWVudCBkZSBsJ2luaXRpYWxpc2F0aW9uIMOgIGwnw6l2w6luZW1lbnQgXCJET01Db250ZW50TG9hZGVkXCJcclxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGluaXREZWxldGVCdXR0b25zKTsiXSwibmFtZXMiOlsiU3dhbCIsImNvbnNvbGUiLCJsb2ciLCJpbml0RGVsZXRlQnV0dG9ucyIsImRlbGV0ZUJ1dHRvbnMiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJjb25jYXQiLCJsZW5ndGgiLCJmb3JFYWNoIiwiYnV0dG9uIiwiYWRkRXZlbnRMaXN0ZW5lciIsInVybCIsImRhdGFzZXQiLCJ0b2tlbiIsImZpcmUiLCJ0aXRsZSIsInRleHQiLCJpY29uIiwic2hvd0NhbmNlbEJ1dHRvbiIsImNvbmZpcm1CdXR0b25Db2xvciIsImNhbmNlbEJ1dHRvbkNvbG9yIiwiY29uZmlybUJ1dHRvblRleHQiLCJjYW5jZWxCdXR0b25UZXh0IiwidGhlbiIsInJlc3VsdCIsImlzQ29uZmlybWVkIiwiZmV0Y2giLCJtZXRob2QiLCJoZWFkZXJzIiwicmVzcG9uc2UiLCJvayIsImxvY2F0aW9uIiwicmVsb2FkIiwiZXJyb3IiXSwic291cmNlUm9vdCI6IiJ9