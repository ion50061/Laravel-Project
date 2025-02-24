<x-mail::message>
請注意：此信件由系統自動發送，請勿直接回覆此信


親愛的使用者您好：


這是一封確認啟用新帳號的信!
這封電子郵件訊息是自動傳送的，所以我們無法即時回應傳送到這個電子郵件地址的任何回覆，因此，請不要直接回覆這封電子郵件訊息。


我們已經收到您在「聯大二手書網」，
啟用新帳號 <div class="welcome-name">{{ $username }}</div> 的申請。為了確保帳號申請者為此信箱的所有人，
我們寄送這封確認信函，以保障您的權益。
請點按下列的按鍵，即可完成新帳號的認證程序：

<x-mail::button :url="$verificationUrl">
驗證
</x-mail::button>

謝謝您!<br>

如果誤收此封電子郵件，您若未按下上述驗證，勿需進行任何操作。
如果您有任何關於您帳號的相關問題，請造訪「聯大二手書網」
您若是有其他問題，也歡迎隨時與我們連絡，謝謝您！
</x-mail::message>
