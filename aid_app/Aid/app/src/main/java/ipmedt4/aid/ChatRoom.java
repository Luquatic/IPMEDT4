package ipmedt4.aid;

import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.ActionBar;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.Toolbar;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.WindowManager;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;

import com.google.firebase.database.ChildEventListener;
import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;

import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.HashMap;
import java.util.Iterator;
import java.util.Map;

public class ChatRoom extends AppCompatActivity {
    private Button sendButton;
    private EditText messageInput;
    private TextView messageVieww;
    private String patientName;
    private String roomName;
    private DatabaseReference root;
    private String tempKey;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chat_room);

        // enable back button in toolbar (adding parentacitivity in manifest)
        getSupportActionBar().setDisplayHomeAsUpEnabled(true);

        // initializing custom font
        Typeface RalewayRegular = Typeface.createFromAsset(getAssets(), "fonts/Raleway-Regular.ttf");


        // initializing variables of class
        sendButton = (Button) findViewById(R.id.send_button);
        messageInput = (EditText) findViewById(R.id.message_input);
        messageVieww = (TextView) findViewById(R.id.message_view);

        // set custom font for elements
        messageVieww.setTypeface(RalewayRegular);
        sendButton.setTypeface(RalewayRegular);


        // get information from chat_activities' intent
        patientName = getIntent().getExtras().get("Gebruiker").toString();
        roomName = getIntent().getExtras().get("Afdeling").toString();

        // set title according to chosen room
        setTitle("Afdeling " + roomName);

        // get access to messages in database parentroom
        root = FirebaseDatabase.getInstance().getReference().child(roomName);

        // send message
        sendButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Calendar time = Calendar.getInstance();
                SimpleDateFormat time_format = new SimpleDateFormat("HH:mm");
                String current_time = time_format.format(time.getTime());

                // make randomkeys to make every textmessage unique
                Map<String, Object> map = new HashMap<String, Object>();
                tempKey = root.push().getKey();
                root.updateChildren(map);

                // get random key object to make message
                DatabaseReference message_root = root.child(tempKey);
                Map<String, Object> map2 = new HashMap<String, Object>();

                // put name and message in map and append it to cdatabse
                map2.put("Naam", patientName);
                map2.put("Bericht", messageInput.getText().toString());
                map2.put("Time", current_time);
                message_root.updateChildren(map2);
                messageInput.setText("");
            }   
        });

        root.addChildEventListener(new ChildEventListener() {
            @Override
            public void onChildAdded(DataSnapshot dataSnapshot, String s) {
                append_chat(dataSnapshot);
            }

            @Override
            public void onChildChanged(DataSnapshot dataSnapshot, String s) {
                append_chat(dataSnapshot);
            }

            @Override
            public void onChildRemoved(DataSnapshot dataSnapshot) {

            }

            @Override
            public void onChildMoved(DataSnapshot dataSnapshot, String s) {

            }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });

    }

    private String user;
    private String message;
    private String time;

    // method to get chat information from database and push it to the screen

    private void append_chat(DataSnapshot dataSnapshot) {
        Iterator i = dataSnapshot.getChildren().iterator();

        while (i.hasNext()) {
            message = (String) ((DataSnapshot)i.next()).getValue();
            user = (String) ((DataSnapshot)i.next()).getValue();
            time = (String) ((DataSnapshot)i.next()).getValue();

            // the final layout that gets pushed to textview
            messageVieww.append("\n" + "(" + time + ") " + user + ": " + message + "\n" + "-----------------------");
        }


    }

    // creates menu button top right corner
    @Override
    public boolean onCreateOptionsMenu (Menu menu) {
        // locates .xml menu file (res\menu\main_menu.xml)
        getMenuInflater().inflate(R.menu.menu_main, menu);
        return true;
    }

    // menu event handler which makes user select chatroom option
    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        int id = item.getItemId();

        // go to settings activity
        if (id == R.id.chat_rooms) {
            Intent intent = new Intent(ChatRoom.this, chat_activity.class);
            startActivity(intent);
            return true;
        }

        return super.onOptionsItemSelected(item);
    }

}
