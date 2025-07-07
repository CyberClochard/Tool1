export interface DeceasedDetail {
  id: string;
  name: string;
  type: 'HUM';
  specialRequirements?: string;
  ticketNumber?: string;
}

export interface FlightDetail {
  flightNumber: string;
  airline: string;
  departure: {
    airport: string;
    airportCode: string;
    date: string;
    time: string;
  };
  arrival: {
    airport: string;
    airportCode: string;
    date: string;
    time: string;
  };
  aircraft?: string;
  duration?: string;
}

export interface DeliveryInfo {
  date: string;
  time: string;
  location: string;
}

export interface CaseData {
  dossierNumber: string;
  awbNumber: string;
  clientName: string;
  clientContact: {
    email: string;
    phone: string;
  };
  bookingReference: string;
  bookingDate: string;
  flights: FlightDetail[];
  deceased: DeceasedDetail;
  deliveryInfo?: DeliveryInfo;
  specialInstructions?: string;
  emergencyContact?: {
    name: string;
    phone: string;
  };
  createdAt: string;
  status: 'confirmed' | 'pending' | 'cancelled';
}