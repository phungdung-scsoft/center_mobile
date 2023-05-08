(function($) {
  // ランダムな文字列の取得
  function generateRandomString(length) {
    let result = '';
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for (let i = 0; i < length; i++) {
      result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    return result;
  }

  // モーダルをフッターに追加
  function setModalToFooter({ id, imageUrl, freeText, conformText }) {
    const modal = $(`
    <section id="${id}" class="pcs-modal-area">
      <div class="pcs-modal-bg"></div>
      <div class="pcs-modal-wrapper">
        <div class="pcs-modal-text">${freeText}</div>
        <div class="pcs-modal-contents">
          <div id="${id}_canvas" class="pcs-canvas">
            <img src="${imageUrl}">
          </div>
        </div>
        <div class="pcs-close-modal">
          ×
        </div>
        <div class="pcs-modal-conform-wrapper">
          <button type="button" class="pcs-modal-conform" disabled>${conformText}</button>
        </div>
      </div>
    </section>
    `);
    $('body').append(modal);
  }

  // PDFのページ生成
  /*
  function pdfRenderPage(id, page, modalWidth) {

    // ウインドウに合わせたサイズにする
    const page_w = page._pageInfo.view[2];
    let scale = modalWidth / page_w;
    // 1倍以下は字がくずれるので調整
    if (scale < 1) scale = 1;

    const viewport = page.getViewport({scale: scale});
    const canvas = document.createElement("canvas");
    const context = canvas.getContext("2d");
    canvas.height = viewport.height;
    canvas.width = viewport.width;
    $(`#${id}_canvas`).append(canvas);
    const renderContext = {
      canvasContext: context,
      viewport: viewport
    };
    page.render(renderContext);
  }

  pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js";
  */

  $.fn.imgCheckSupport = function(options) {
    // 設定
    const settings = $.extend({
      // image URL
      imageUrl: '',
      // モーダル上部の文言
      freeText: '下記ご確認いただき、同意していただける場合は[同意する]を押下してください。',
      // 確認ボタンの文言
      conformText: '同意する',
      // 確認ボタンを押したときの挙動
      callbackConform: () => {},
    }, options);

    // 利用値
    const params = {
      // ID
      id: 'pcs_' + generateRandomString(8),
    }

    // モーダル作成
    setModalToFooter({ ...settings, ...params });

    /*
    // 読み込んだデータ
    let pdfData = null;
    // 待機
    let interval = null;

    pdfjsLib.getDocument({
      url: settings.pdfUrl,
      cMapUrl: "https://unpkg.com/pdfjs-dist@2.16.105/cmaps/",
      cMapPacked: true,
    }).promise.then((pdf) => {
      pdfData = pdf;
    });
    */

    // クリックされた時にモーダル表示
    $(this).click(function() {
      // 表示
      $(`#${params.id}`).fadeIn();

      /*
      if (interval !== null) return;

      const modalWidth = $(`#${params.id} .pcs-modal-contents`).width();

      interval = setInterval(function() {
        if (pdfData !== null) {
          
          const totalPages = pdfData.numPages;
          for (let pageNumber = 1; pageNumber <= totalPages; pageNumber++) {
            pdfData.getPage(pageNumber).then((page) => {
              pdfRenderPage(params.id, page, modalWidth);
            });
          }

          $(`#${params.id} .pcs-loading`).fadeOut();
          $(`#${params.id} .pcs-modal-conform-wrapper`).fadeIn();

          // インターバルを解除する
          clearInterval(interval);
        }
      }, 100);
      */

    });

    // モーダルの非表示
    $(`#${params.id} .pcs-close-modal, #${params.id} .pcs-modal-bg`).click(function(){
      $(`#${params.id}`).fadeOut();
    });

    // スクロールの検知
    $(`#${params.id}_canvas`).scroll(function(){
      // 少しあそびをもたせて、下に到達を検知
      if($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight - 100){
        // 下までいけば押せるようになる
        $(`#${params.id} .pcs-modal-conform`).prop('disabled', false);
      }
    });

    // 確認ボタン
    $(`#${params.id} .pcs-modal-conform`).click(function() {
      settings.callbackConform();
      $(`#${params.id}`).fadeOut();
    });

  };
}(jQuery));