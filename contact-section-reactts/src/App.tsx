import ContactSection from "./ContactSection";

export default function App() {
  return (
    <ContactSection
      kicker="Contact us"
      title="Lets start working"
      subtitle="Fill the form and we'll call you as soon as possible."
      buttonLabel="Send form"
      onSubmit={(event) => {
        event.preventDefault();
      }}
    />
  );
}
