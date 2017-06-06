package ipmedt4.aid;

import java.util.Date;

/**
 * Created by Bram on 2-6-2017.
 */

public class Chat {
    private String textMessage;
    private String user;
    private long messageTime;

    public Chat(String textMessage, String user) {
        this.textMessage = textMessage;
        this.user = user;

        messageTime = new Date().getTime();
    }

    public Chat() {

    }

    public String getTextMessage() {
        return textMessage;
    }

    public void setTextMessage(String textMessage) {
        this.textMessage = textMessage;
    }

    public String getUser() {
        return user;
    }

    public void setUser(String user) {
        this.user = user;
    }

    public long getMessageTime() {
        return messageTime;
    }

    public void setMessageTime(long messageTime) {
        this.messageTime = messageTime;
    }
}
