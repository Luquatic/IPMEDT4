package ipmedt4.aid;

import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.graphics.Typeface;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ListView;
import android.widget.TextView;
import android.widget.Toast;

import com.google.firebase.database.DataSnapshot;
import com.google.firebase.database.DatabaseError;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.google.firebase.database.ValueEventListener;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.HashSet;
import java.util.Iterator;
import java.util.List;
import java.util.Map;
import java.util.Set;

public class chat_activity extends AppCompatActivity {

    // variable to access root of firebase database
    private DatabaseReference root = FirebaseDatabase.getInstance().getReference().getRoot();

    // declaring variables private for class
    private ListView room_names;
    private ArrayAdapter room_adapter;
    private ArrayList<String> roomList = new ArrayList<>();
    private String patient_name;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_chat_activity);
        setTitle("Chats");

        // initializing the custom font
        Typeface RalewayRegular = Typeface.createFromAsset(getAssets(), "fonts/Raleway-Regular.ttf");



        // listview for room names
        room_names = (ListView) findViewById(R.id.room_list);


        // arrayadapter for room_names listview
        room_adapter = new ArrayAdapter<String>(this, android.R.layout.simple_list_item_1, roomList);
        room_names.setAdapter(room_adapter);



        request_user_name();



        // make app request database rooms for chat
        root.addValueEventListener(new ValueEventListener() {
        @Override
        public void onDataChange(DataSnapshot dataSnapshot) {
            // iterate through root children
            Iterator i = dataSnapshot.getChildren().iterator();
            Set<String> set = new HashSet<String>();

            while (i.hasNext()) {
                set.add(((DataSnapshot)i.next()).getKey());
            }
            roomList.clear();
            roomList.addAll(set);
            room_adapter.notifyDataSetChanged();
        }

            @Override
            public void onCancelled(DatabaseError databaseError) {

            }
        });

        // listener to go to desired room
        room_names.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                // intent to switch to room
                Intent intent = new Intent(getApplicationContext(), ChatRoom.class);
                // give username and room name to intent
                intent.putExtra("Afdeling", ((TextView)view).getText().toString());
                intent.putExtra("Gebruiker", patient_name);
                startActivity(intent);
            }
        });




    }


    // User needs to give a user name
    private void request_user_name() {
        // make dialog box
        AlertDialog.Builder builder = new AlertDialog.Builder(this);
        builder.setTitle("Geef een naam: ");
        final EditText namefield = new EditText(this);
        builder.setView(namefield);

        //action when name entered and "Ga door" pressed
        builder.setPositiveButton("Ga door", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int i) {
                patient_name = namefield.getText().toString();
            }
        });

        // action when cancel is pressed
        builder.setNegativeButton("Annuleer", new DialogInterface.OnClickListener() {
            @Override
            public void onClick(DialogInterface dialog, int which) {
                dialog.cancel();
                startActivity(new Intent(chat_activity.this, webview_activity.class));
            }
        });

        builder.show();
    }
}