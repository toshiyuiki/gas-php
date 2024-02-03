# GAS + PHP

## GAS API  
スプレッドシートを作成して、Apps Scriptを作成。
ウェブアプリでデプロイして、ウェブアプリのURLをコピー。  
GAS内ではdoGet()がGET、doPost()がPOSTで動くのでその名前で関数をつくる。  
GETとPOSTのみで、PUTやDELETEは使えないらしいです。  

    const doGet = (e) => {
        //GET 処理
    }
  
    const doPost = (e) => {
        //POST 処理
    }


## ウェブアプリのJSON化  

ウェブアプリはページを作成しちゃってデータを取得できないのでjson化する。  

    const doGet = (e) => {
        //GETの処理でdataをjsonで見やすいように整形する。
        const data = 整形データ

        //ウェブアプリをJSONにする
        const result = ContentService.createTextOutput();
        result.setMimeType(ContentService.MimeType.JSON);
        result.setContent(JSON.stringify(data));
        return result;
    }

## php  

cURLでは動かないので、file_get_contentsで通信する。  
メソッドがGETだとGASのdoGet()、POSTだとdoPost()が動く。  


## note  

GASのトリガーをタイマーでやるのが上手くできず困ってましたが、GASをAPIにするとPHPで操作できるということでやってみた。
これでPHPをcronで動かせば毎日動かせる。  

