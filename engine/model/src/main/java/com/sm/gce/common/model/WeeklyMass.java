package com.sm.gce.common.model;

import org.joda.time.LocalTime;

import com.sm.gce.common.model.enums.Day;
import com.sm.gce.common.model.enums.EventType;
import com.sm.gce.common.model.enums.RepeatType;

public class WeeklyMass extends ChurchEvent {

    public WeeklyMass(Day day) {
        initialize(day);
    }

    public WeeklyMass(Day day, int hour, int min) {
        this.setStartTime(new LocalTime(hour, min));
        initialize(day);
    }

    private void initialize(Day day) {
        this.setDay(day);
        this.setRepeatType(RepeatType.WEEKLY);
        this.setEventType(EventType.MASS);
    }

}
