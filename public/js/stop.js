/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {


$(function () {
    var $deleteModal = $('#delete-modal').foundation();
    var $deleteButton = $deleteModal.find('.delete');
    var deleteHandlers = [];

    function addDeleteHandler(handler) {
        var wrappedHandler = function wrappedHandler(e) {
            handler();
            $deleteModal.foundation('close');
        };
        $deleteButton.one('click', wrappedHandler);
        deleteHandlers.push(wrappedHandler);
    }

    // Clear delete handlers when the modal closes
    $deleteModal.on('closed.zf.reveal', function () {
        deleteHandlers.forEach(function (handler) {
            $deleteButton.off('click', handler);
        });
        deleteHandlers = [];
    });

    $('.delete__form').each(function (index, el) {
        var $form = $(el);
        $form.click(function (e) {
            e.preventDefault();
            $deleteModal.foundation('open');
            addDeleteHandler(function () {
                $form.submit();
            });
        });
    });
});

/*AJAX Ingredient Search*/
$("#ingredient__search").on("keyup paste", function () {
    $query = $(this).val();
    $parent = $(".parent").attr('id');
    $.ajax({
        url: "/ingredient/search?query=" + encodeURIComponent($query),
        action: "GET",
        success: function success(response) {
            $("#search__results").empty();
            var obj = JSON.parse(response);
            if (obj.length > 0) {
                console.log(obj);
                $.each(obj, function (key, value) {
                    $("#search__results").append($("<div class='column'>").load('/recipe/' + $parent + '/ingredient/' + value.id + "/quantityCard"));
                });
            } else {
                $("#search__results").append('<h1>No Results</h1>');
            }
        }
    });
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);