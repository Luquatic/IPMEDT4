package ipmedt4.aid;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class webview_activity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_webview_activity);

        WebView webviewer = (WebView) findViewById(R.id.aid_webview);
        webviewer.setWebViewClient(new WebViewClient());

        webviewer.loadUrl("http://www.google.com/");
    }
}
